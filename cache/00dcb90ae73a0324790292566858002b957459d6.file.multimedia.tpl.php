<?php /* Smarty version Smarty-3.1.21, created on 2016-02-24 10:37:03
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/multimedia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134036666156cdce1fd7e109-74373632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00dcb90ae73a0324790292566858002b957459d6' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/multimedia.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134036666156cdce1fd7e109-74373632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'multimediacounter' => 0,
    'multimediacountermax' => 0,
    'gimme' => 0,
    'multimediacurrent' => 0,
    'multimediatype' => 0,
    'multimedia' => 0,
    'articleID' => 0,
    'multimediaType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cdce1fee6ec3_71023657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cdce1fee6ec3_71023657')) {function content_56cdce1fee6ec3_71023657($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list_articles')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_articles.php';
if (!is_callable('smarty_block_list_article_attachments')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_article_attachments.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['multimediacounter'])) {$_smarty_tpl->tpl_vars['multimediacounter'] = clone $_smarty_tpl->tpl_vars['multimediacounter'];
$_smarty_tpl->tpl_vars['multimediacounter']->value = 0; $_smarty_tpl->tpl_vars['multimediacounter']->nocache = null; $_smarty_tpl->tpl_vars['multimediacounter']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediacounter'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['multimediacountermax'])) {$_smarty_tpl->tpl_vars['multimediacountermax'] = clone $_smarty_tpl->tpl_vars['multimediacountermax'];
$_smarty_tpl->tpl_vars['multimediacountermax']->value = 5; $_smarty_tpl->tpl_vars['multimediacountermax']->nocache = null; $_smarty_tpl->tpl_vars['multimediacountermax']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediacountermax'] = new Smarty_variable(5, null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('list_articles', array('length'=>"100",'ignore_issue'=>"true",'ignore_section'=>"true",'order'=>"bypublishdate desc")); $_block_repeat=true; echo smarty_block_list_articles(array('length'=>"100",'ignore_issue'=>"true",'ignore_section'=>"true",'order'=>"bypublishdate desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  
  <?php if ($_smarty_tpl->tpl_vars['multimediacounter']->value<$_smarty_tpl->tpl_vars['multimediacountermax']->value) {?>
      
      <?php if (isset($_smarty_tpl->tpl_vars['multimediacurrent'])) {$_smarty_tpl->tpl_vars['multimediacurrent'] = clone $_smarty_tpl->tpl_vars['multimediacurrent'];
$_smarty_tpl->tpl_vars['multimediacurrent']->value = 0; $_smarty_tpl->tpl_vars['multimediacurrent']->nocache = null; $_smarty_tpl->tpl_vars['multimediacurrent']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediacurrent'] = new Smarty_variable(0, null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['slideshow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slideshow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gimme']->value->article->slideshows; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slideshow']->key => $_smarty_tpl->tpl_vars['slideshow']->value) {
$_smarty_tpl->tpl_vars['slideshow']->_loop = true;
?>
        <?php if (isset($_smarty_tpl->tpl_vars['multimediacurrent'])) {$_smarty_tpl->tpl_vars['multimediacurrent'] = clone $_smarty_tpl->tpl_vars['multimediacurrent'];
$_smarty_tpl->tpl_vars['multimediacurrent']->value = 1; $_smarty_tpl->tpl_vars['multimediacurrent']->nocache = null; $_smarty_tpl->tpl_vars['multimediacurrent']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediacurrent'] = new Smarty_variable(1, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['multimediatype'])) {$_smarty_tpl->tpl_vars['multimediatype'] = clone $_smarty_tpl->tpl_vars['multimediatype'];
$_smarty_tpl->tpl_vars['multimediatype']->value = 'slideshow'; $_smarty_tpl->tpl_vars['multimediatype']->nocache = null; $_smarty_tpl->tpl_vars['multimediatype']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediatype'] = new Smarty_variable('slideshow', null, 0);?>
      <?php } ?>
      <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->has_attachments) {?> 
          <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_attachments', array()); $_block_repeat=true; echo smarty_block_list_article_attachments(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <?php if ($_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='oga') {?>    
                <?php if (isset($_smarty_tpl->tpl_vars['multimediacurrent'])) {$_smarty_tpl->tpl_vars['multimediacurrent'] = clone $_smarty_tpl->tpl_vars['multimediacurrent'];
$_smarty_tpl->tpl_vars['multimediacurrent']->value = 1; $_smarty_tpl->tpl_vars['multimediacurrent']->nocache = null; $_smarty_tpl->tpl_vars['multimediacurrent']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediacurrent'] = new Smarty_variable(1, null, 0);?>              
                <?php if (isset($_smarty_tpl->tpl_vars['multimediatype'])) {$_smarty_tpl->tpl_vars['multimediatype'] = clone $_smarty_tpl->tpl_vars['multimediatype'];
$_smarty_tpl->tpl_vars['multimediatype']->value = 'audio'; $_smarty_tpl->tpl_vars['multimediatype']->nocache = null; $_smarty_tpl->tpl_vars['multimediatype']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediatype'] = new Smarty_variable('audio', null, 0);?>
              <?php } elseif ($_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='ogv'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='ogg'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='mp4'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='webm') {?>             
                <?php if (isset($_smarty_tpl->tpl_vars['multimediacurrent'])) {$_smarty_tpl->tpl_vars['multimediacurrent'] = clone $_smarty_tpl->tpl_vars['multimediacurrent'];
$_smarty_tpl->tpl_vars['multimediacurrent']->value = 1; $_smarty_tpl->tpl_vars['multimediacurrent']->nocache = null; $_smarty_tpl->tpl_vars['multimediacurrent']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediacurrent'] = new Smarty_variable(1, null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['multimediatype'])) {$_smarty_tpl->tpl_vars['multimediatype'] = clone $_smarty_tpl->tpl_vars['multimediatype'];
$_smarty_tpl->tpl_vars['multimediatype']->value = 'video'; $_smarty_tpl->tpl_vars['multimediatype']->nocache = null; $_smarty_tpl->tpl_vars['multimediatype']->scope = 0;
} else $_smarty_tpl->tpl_vars['multimediatype'] = new Smarty_variable('video', null, 0);?>
              <?php }?>  
          <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_attachments(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
   
      <?php }?>  
      
      <?php if ($_smarty_tpl->tpl_vars['multimediacurrent']->value==1) {?>
        
        <?php $_smarty_tpl->createLocalArrayVariable('multimedia', null, 0);
$_smarty_tpl->tpl_vars['multimedia']->value[((string)$_smarty_tpl->tpl_vars['gimme']->value->article->number)] = ((string)$_smarty_tpl->tpl_vars['multimediatype']->value);?>
        
        <?php if (isset($_smarty_tpl->tpl_vars["multimediacounter"])) {$_smarty_tpl->tpl_vars["multimediacounter"] = clone $_smarty_tpl->tpl_vars["multimediacounter"];
$_smarty_tpl->tpl_vars["multimediacounter"]->value = $_smarty_tpl->tpl_vars['multimediacounter']->value+1; $_smarty_tpl->tpl_vars["multimediacounter"]->nocache = null; $_smarty_tpl->tpl_vars["multimediacounter"]->scope = 0;
} else $_smarty_tpl->tpl_vars["multimediacounter"] = new Smarty_variable($_smarty_tpl->tpl_vars['multimediacounter']->value+1, null, 0);?>
      <?php }?>
  <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_articles(array('length'=>"100",'ignore_issue'=>"true",'ignore_section'=>"true",'order'=>"bypublishdate desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  
<div class="news-sections news-sections-multimedia">
      <h2>Multimedia</h2>
      <div id="slider-multimedia" class="news-slider slider-multimedia">
      <?php  $_smarty_tpl->tpl_vars['multimediaType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['multimediaType']->_loop = false;
 $_smarty_tpl->tpl_vars['articleID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['multimedia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['multimediaType']->key => $_smarty_tpl->tpl_vars['multimediaType']->value) {
$_smarty_tpl->tpl_vars['multimediaType']->_loop = true;
 $_smarty_tpl->tpl_vars['articleID']->value = $_smarty_tpl->tpl_vars['multimediaType']->key;
?>

          <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_articles', array('ignore_issue'=>"true",'ignore_section'=>"true",'length'=>"1",'constraints'=>"number is ".((string)$_smarty_tpl->tpl_vars['articleID']->value))); $_block_repeat=true; echo smarty_block_list_articles(array('ignore_issue'=>"true",'ignore_section'=>"true",'length'=>"1",'constraints'=>"number is ".((string)$_smarty_tpl->tpl_vars['articleID']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <div>
            <?php if ($_smarty_tpl->tpl_vars['multimediaType']->value=="video"||$_smarty_tpl->tpl_vars['multimediaType']->value=='audio') {?> 
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_attachments', array('length'=>"1")); $_block_repeat=true; echo smarty_block_list_article_attachments(array('length'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['multimediaType']->value=="audio") {?>
                      <h3><span aria-hidden="true" class="icon-music"></span> Audio</h3>
                    <?php } elseif ($_smarty_tpl->tpl_vars['multimediaType']->value=="video") {?>
                      <h3><span aria-hidden="true" class="icon-play"></span> Video</h3>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_attachments(array('length'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } else { ?>
                      <h3><span aria-hidden="true" class="icon-camera"></span> Image</h3>
                    <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['multimediaType']->value=="video"||$_smarty_tpl->tpl_vars['multimediaType']->value=='audio') {?> 
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_attachments', array('length'=>"1")); $_block_repeat=true; echo smarty_block_list_article_attachments(array('length'=>"1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['multimediaType']->value=="audio") {?>
                      <a href="<?php echo smarty_function_uri(array('options'=>"article"),$_smarty_tpl);?>
#audioattachment">
                    <?php } elseif ($_smarty_tpl->tpl_vars['multimediaType']->value=="video") {?>
                      <a href="<?php echo smarty_function_uri(array('options'=>"article"),$_smarty_tpl);?>
#videoattachment">
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_attachments(array('length'=>"1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } else { ?>
                      <a href="<?php echo smarty_function_uri(array('options'=>"article"),$_smarty_tpl);?>
#imageattachment">
                    <?php }?>
              
                <?php echo $_smarty_tpl->getSubTemplate ("_tpl/img/img_rectangle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('where'=>"no"), 0);?>

              </a>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_articles(array('ignore_issue'=>"true",'ignore_section'=>"true",'length'=>"1",'constraints'=>"number is ".((string)$_smarty_tpl->tpl_vars['articleID']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      <?php } ?>
      </div>
  </div><?php }} ?>
