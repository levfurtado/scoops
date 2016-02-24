<?php
require_once($GLOBALS['g_campsiteDir'].'/classes/Input.php');
require_once($GLOBALS['g_campsiteDir'].'/classes/Article.php');
require_once($GLOBALS['g_campsiteDir'].'/classes/Image.php');
require_once($GLOBALS['g_campsiteDir'].'/classes/ImageSearch.php');
require_once($GLOBALS['g_campsiteDir'].'/classes/Log.php');
require_once($GLOBALS['g_campsiteDir']."/$ADMIN_DIR/media-archive/editor_load_tinymce.php");

$translator = \Zend_Registry::get('container')->getService('translator');
$preferencesService = \Zend_Registry::get('container')->getService('preferences');
$f_image_id = Input::Get('f_image_id', 'int', 0);
$f_fix_thumbs = Input::Get('f_fix_thumbs', 'int', 0, true);
if ($f_fix_thumbs) {
    //regenerate missing thumbs
    $returnMessage = $translator->trans('No thumbnails were fixed.', array(), 'media_archive');
    $imageObj = new Image();
    $imagesList = $imageObj->GetList(array(), array(), 0, 0, $imagesCount, TRUE);

    foreach ($imagesList as $image) {
        $thumbLocation = $image->getThumbnailStorageLocation();
        if (!file_exists($thumbLocation)) {
            if ($image->generateThumbnailFromImage()) {
            	$returnMessage = $translator->trans('Missing thumbnails fixed.', array(), 'media_archive');
            }
        }
    }

    camp_html_add_msg($returnMessage);
    camp_html_goto_page("/$ADMIN/media-archive/index.php");
    exit();
}

if (!Input::IsValid()) {
	camp_html_goto_page("/$ADMIN/media-archive/index.php");
}
$imageObj = new Image($f_image_id);
$articles = ArticleImage::GetArticlesThatUseImage($f_image_id);

$allowedExtensions = array('jpg', 'jpeg', 'tiff', 'tif');
$imagePathParts = explode('.', $imageObj->getImageFileName());
$imageExtension = strtolower($imagePathParts[count($imagePathParts) - 1]);
$iptcDate = null;
$iptcPlace = null;
$iptcPhotographer = null;
$iptcDescription = null;

if (in_array($imageExtension, $allowedExtensions)) {
    $exif = @exif_read_data($imageObj->getImageStorageLocation());
    if (isset($exif['DateTime'])) {
        $exifDate = date('Y-m-d', strtotime($exif['DateTime']));
    }

    $size = getimagesize($imageObj->getImageStorageLocation(), $info);
    $iptc = array();
    foreach ($info as $key => $value) {
        $iptc[$key] = iptcparse($value);
    }
    if (isset($iptc['APP13'])) {
        $iptc = $iptc['APP13'];
    }
    if (isset($iptc['2#055'])) {
        $iptcDate = $iptc['2#055'][0];
        $iptcDate = date('Y-m-d', strtotime($iptcDate));
    }
    if (isset($iptc['2#080'])) {
        $iptcPhotographer = strip_tags($iptc['2#080'][0]);
    }
    if (isset($iptc['2#120'])) {
        $iptcDescription = strip_tags($iptc['2#120'][0]);
    }
    if (isset($iptc['2#090']) || isset($iptc['2#092']) || isset($iptc['2#101'])) {
        $iptcPlace = array();
        if (isset($iptc['2#101'])) {
            $iptcPlace[] = strip_tags($iptc['2#101'][0]);
        }
        if (isset($iptc['2#090'])) {
            $iptcPlace[] = strip_tags($iptc['2#090'][0]);
        }
        if (isset($iptc['2#092'])) {
            $iptcPlace[] = strip_tags($iptc['2#092'][0]);
        }
        $iptcPlace = implode(', ', $iptcPlace);
    }
}

$crumbs = array();
$crumbs[] = array($translator->trans('Content'), "");
$crumbs[] = array($translator->trans('Media Archive', array(), 'home'), "/$ADMIN/media-archive/index.php");

if ($g_user->hasPermission('ChangeImage')) {
	$label_text = $translator->trans('Change image information', array(), 'media_archive');
} else {
	$label_text = $translator->trans('View image', array(), 'media_archive');
}

$crumbs[] = array($label_text, '');
$breadcrumbs = camp_html_breadcrumbs($crumbs);

$controller->view->headTitle($label_text.' - Newscoop Admin', 'SET');

echo $breadcrumbs;
?>
<p></p>
<table cellpadding="0" cellspacing="0" class="action_buttons">
<tr>
<?php if ($g_user->hasPermission('AddImage')) { ?>
    <td>
        <A HREF="/<?php echo $ADMIN; ?>/media-archive/add.php"><IMG SRC="<?php echo $Campsite["ADMIN_IMAGE_BASE_URL"]; ?>/add.png" BORDER="0" alt="<?php  echo $translator->trans('Add new image', array(), 'media_archive'); ?>"></A>
    </TD>
    <TD style="padding-left: 3px;">
        <A HREF="/<?php echo $ADMIN; ?>/media-archive/add.php"><B><?php  echo $translator->trans('Add new image', array(), 'media_archive'); ?></B></A>
    </TD>
<?php } ?>
<?php if ($g_user->hasPermission('DeleteImage') && !$imageObj->inUse()) { ?>
    <td style="padding-left: 15px;">
        <A HREF="/<?php echo $ADMIN; ?>/media-archive/do_del.php?f_image_id=<?php echo $f_image_id; ?>&<?php echo SecurityToken::URLParameter();?>" onclick="return confirm('<?php echo $translator->trans("Are you sure you want to delete the image $1?", array('$1' => camp_javascriptspecialchars($imageObj->getDescription()))); ?>');"><IMG SRC="<?php echo $Campsite["ADMIN_IMAGE_BASE_URL"]; ?>/delete.png" BORDER="0" ALT="<?php echo $translator->trans('Delete image $1', array('$1' => htmlspecialchars($imageObj->getDescription())), 'media_archive'); ?>"></A>
    </TD>
    <TD style="padding-left: 3px;">
        <A HREF="/<?php echo $ADMIN; ?>/media-archive/do_del.php?f_image_id=<?php echo $f_image_id; ?>&<?php echo SecurityToken::URLParameter();?>" onclick="return confirm('<?php echo $translator->trans("Are you sure you want to delete the image $1?", array('$1' => camp_javascriptspecialchars($imageObj->getDescription()))); ?>');"><b><?php echo $translator->trans('Delete'); ?></b></a>
    </TD>
<?php } ?>
</tr>
</table>

<?php camp_html_display_msgs(); ?>
<p></p>
<IMG SRC="<?php echo $imageObj->getImageUrl(); ?>" BORDER="0" ALT="<?php echo htmlspecialchars($imageObj->getDescription()); ?>" style="padding-left:15px; max-width: 800px">
<P>
<?php if ($g_user->hasPermission('ChangeImage')) { ?>
<FORM style="float:left;" NAME="image_edit" METHOD="POST" ACTION="/<?php echo $ADMIN; ?>/media-archive/do_edit.php" ENCTYPE="multipart/form-data" onSubmit="<?php
    if ($preferencesService->MediaRichTextCaptions  == 'Y') {
        echo 'return validateTinyMCEEditors();';
    }
?>">
<?php echo SecurityToken::FormParameter(); ?>
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" class="box_table">
<TR>
	<TD COLSPAN="2">
		<B><?php  echo $translator->trans("Change image information", array(), 'media_archive'); ?></B>
		<HR NOSHADE SIZE="1" COLOR="BLACK">
	</TD>
</TR>
<?php

    $captionStatus = $preferencesService->MediaRichTextCaptions;
    $captionLimit = $preferencesService->MediaCaptionLength;

    if ($captionStatus == 'Y') {

        // CHeck if language is this is valid
        $languageSelectedObj = new Language((int) camp_session_get('LoginLanguageId', 0));
        $editorLanguage = !empty($_COOKIE['TOL_Language']) ? $_COOKIE['TOL_Language'] : $languageSelectedObj->getCode();
        $editorOptions = array(
            'max_chars' => $captionLimit,
            'toolbar_length' => 28,
        );

        $iptcDescriptionCode = "tinyMCE.editors['f_image_description'].setContent('". addcslashes($iptcDescription, "'")."');";

        editor_load_tinymce('f_image_description', $g_user, $editorLanguage, $editorOptions);
?>
<TR>
    <TD ALIGN="RIGHT" style="width:115px;"><?php
        echo $translator->trans('Description');
        if ($captionStatus == 'Y' && $captionLimit > 0) {
            echo $translator->trans(' (max. $1 characters)', array('$1' => $captionLimit), 'media_archive');
        }
    ?>:</TD>
    <TD align="left" style="width:590px">
        <?php
            if (!empty($iptcDescription)) {
                ?>
                <small><a style="float:right;" href="javascript:void(0);" onClick="<?php echo $iptcDescriptionCode; ?>">IPTC</a></small><br>
                <?php
            }
        ?>
        <textarea name="f_image_description" id="f_image_description" rows="8" cols="70"><?php echo $imageObj->getDescription(); ?></textarea>
    </TD>
</TR>
<?php
    } else {

        $iptcDescriptionCode = "document.getElementById('f_image_description').value='". addcslashes($iptcDescription, "'") ."'";
?>
<TR>
        <TD ALIGN="RIGHT" ><?php echo $translator->trans('Description'); ?>:</TD>
        <TD align="left">
            <INPUT TYPE="TEXT" NAME="f_image_description" id="f_image_description" VALUE="<?php echo htmlspecialchars(strip_tags($imageObj->getDescription())); ?>" SIZE="32" class="input_text" maxlength="<?php echo $captionLimit; ?>">
            <?php
                if (!empty($iptcDescription)) {
                    ?>
                    <small><a style="float:right;" href="javascript:void(0);" onClick="<?php echo $iptcDescriptionCode; ?>">IPTC</a></small>
                    <?php
                }
            ?>
        </TD>
</TR>
<?php
    }
?>
<TR>
	<TD ALIGN="RIGHT" ><?php  echo $translator->trans("Photographer"); ?>:</TD>
	<TD align="left">
	<INPUT TYPE="TEXT" NAME="f_image_photographer" id="f_image_photographer" VALUE="<?php echo htmlspecialchars($imageObj->getPhotographer());?>" SIZE="32" class="input_text">
    <?php
        if (!empty($iptcPhotographer)) {
            ?>
            <small><a style="float:right;" href="javascript:void(0);" onClick="document.getElementById('f_image_photographer').value='<?php echo($iptcPhotographer); ?>';">IPTC</a></small>
            <?php
        }
    ?>
	</TD>
</TR>
<tr>
    <td><?php echo $translator->trans('Photographer URL', array(), 'media_archive'); ?>:</td>
    <td><input type="text" name="f_photographer_url" class="input_text" value="<?php echo $this->view->escape($imageObj->getPhotographerUrl()); ?>" size="32" title="<?php echo $this->view->escape($translator->trans('Add website url starting with http://', array(), 'media_archive')); ?>" /></td>
</tr>
<TR>
	<TD ALIGN="RIGHT" ><?php  echo $translator->trans("Place"); ?>:</TD>
	<TD align="left">
	<INPUT TYPE="TEXT" NAME="f_image_place" id="f_image_place" VALUE="<?php echo htmlspecialchars($imageObj->getPlace()); ?>" SIZE="32" class="input_text">
    <?php
        if (!empty($iptcPlace)) {
            ?>
            <small><a style="float:right;" href="javascript:void(0);" onClick="document.getElementById('f_image_place').value='<?php echo($iptcPlace); ?>';">IPTC</a></small>
            <?php
        }
    ?>
	</TD>
</TR>
<TR>
	<TD ALIGN="RIGHT" ><?php  echo $translator->trans("Date"); ?>:</TD>
	<TD align="left">
	<input type="text" id="f_image_date" name="f_image_date" value="<?php echo htmlspecialchars($imageObj->getDate()); ?>" size="11" maxlength="10" class="input_text date" />
    <?php
        if (!empty($exifDate)) {
            ?>
            <small><a style="float:right;" href="javascript:void(0);" onClick="document.getElementById('f_image_date').value='<?php echo($exifDate); ?>';">&nbsp;EXIF</a></small>
            <?php
        }
        if (!empty($iptcDate)) {
            ?>
            <small><a style="float:right;" href="javascript:void(0);" onClick="document.getElementById('f_image_date').value='<?php echo($iptcDate); ?>';">IPTC</a></small>
            <?php
        }
    ?>
	</TD>
</TR>
<?php
    if (!empty($iptcDescription) || !empty($iptcPhotographer) || !empty($iptcPlace) || !empty($iptcDate)) {
        ?>

        <TR>
            <TD ALIGN="RIGHT" ></TD>
            <TD align="left">
            <small><a style="float:right;" href="javascript:void(0);" onClick="document.getElementById('f_image_date').value='<?php echo($iptcDate); ?>';document.getElementById('f_image_place').value='<?php echo($iptcPlace); ?>';document.getElementById('f_image_photographer').value='<?php echo($iptcPhotographer); ?>';<?php echo $iptcDescriptionCode ?>">Import all IPTC</a></small>
            </TD>
        </TR>

        <?php
    }
?>
<TR>
	<TD ALIGN="RIGHT" ><?php  echo $translator->trans("Status"); ?>:</TD>
	<TD align="left">
	<input type="radio" name="f_image_status" value="approved" <?php if ($imageObj->getStatus() == 'approved') echo('checked'); ?> >Approved
	<input type="radio" name="f_image_status" value="unapproved" <?php if ($imageObj->getStatus() == 'unapproved') echo('checked'); ?>>Unapproved
	</TD>
</TR>
<TR>
	<TD ALIGN="RIGHT" ><?php  echo $translator->trans("Source", array(), 'media_archive'); ?>:</TD>
	<TD align="left">
	<?php if ($imageObj->getSource() == 'local') echo $translator->trans('Local', array(), 'media_archive'); ?>
	<?php if ($imageObj->getSource() == 'feedback') echo $translator->trans('Feedback', array(), 'media_archive'); ?>
	</TD>
</TR>
<?php
if ($imageObj->getLocation() == 'remote') {
?>
<TR>
	<TD ALIGN="RIGHT" ><?php  echo $translator->trans("URL"); ?>:</TD>
	<TD align="left">
		<?php echo htmlspecialchars($imageObj->getUrl()); ?>
	</TD>
</TR>
<?php
} else {
?>
<TR>
	<TD ALIGN="RIGHT"><?php  echo $translator->trans("Image"); ?>:</TD>
	<TD align="left">
		<?php echo basename($imageObj->getImageStorageLocation()); ?>
	</TD>
</TR>
<?php
}
?>
<TR>
	<TD COLSPAN="2" align="center">
	<INPUT TYPE="HIDDEN" NAME="f_image_id" VALUE="<?php echo $imageObj->getImageId(); ?>">
	<INPUT TYPE="submit" NAME="Save" VALUE="<?php  echo $translator->trans('Save'); ?>" class="button">
	</TD>
</TR>
</TABLE>
</FORM>
<script>
document.forms.image_edit.f_image_description.focus();
</script>
<?php
} // if ($g_user->hasPermission('ChangeImage'))

if (count($articles) > 0) {
	// image is in use //////////////////////////////////////////////////////////////////
	?>
	<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="3" width="370px" class="table_list" style="float:left; margin-top: 5px;">
	<tr class="table_list_header">
		<td><?php echo $translator->trans('Used in articles', array(), 'media_archive'); ?>:</td>
		<td><?php echo $translator->trans('Language'); ?></td>
	</tr>
	<?php
	$color = 0;
    $editorService = \Zend_Registry::get('container')->getService('newscoop.editor');
	foreach ($articles as $article) {
		echo '<tr ';
		if ($color) {
			$color=0;
			echo 'class="list_row_even"';
		} else {
			$color=1;
			echo 'class="list_row_odd"';
		}
		echo '>';
	    echo '<td>';
		echo "<a href=\"".$articleLink = $editorService->getLink($article).'">'.$this->view->escape($article->getTitle()).'</a></td>';
		echo "<td>".$this->view->escape($article->getLanguageName())."</td>";
		echo "</tr>";
	}
	?>
	</table>

<?php }
camp_html_copyright_notice();
?>
