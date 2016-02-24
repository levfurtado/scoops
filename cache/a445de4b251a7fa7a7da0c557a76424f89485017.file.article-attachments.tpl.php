<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:17
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-attachments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15614845056ccd761bd04e0-20149213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a445de4b251a7fa7a7da0c557a76424f89485017' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-attachments.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15614845056ccd761bd04e0-20149213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
    'hasvideo' => 0,
    'videosources' => 0,
    'videoSource' => 0,
    'extension' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd761ce99b5_14140792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd761ce99b5_14140792')) {function content_56ccd761ce99b5_14140792($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list_article_attachments')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_article_attachments.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
if (!is_callable('smarty_function_url')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.url.php';
?><?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->has_attachments) {?> 
  <?php if (isset($_smarty_tpl->tpl_vars['hasvideo'])) {$_smarty_tpl->tpl_vars['hasvideo'] = clone $_smarty_tpl->tpl_vars['hasvideo'];
$_smarty_tpl->tpl_vars['hasvideo']->value = 0; $_smarty_tpl->tpl_vars['hasvideo']->nocache = null; $_smarty_tpl->tpl_vars['hasvideo']->scope = 0;
} else $_smarty_tpl->tpl_vars['hasvideo'] = new Smarty_variable(0, null, 0);?>
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_attachments', array()); $_block_repeat=true; echo smarty_block_list_article_attachments(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='oga'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='mp3'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='MP3') {?>          
    <div class="article-attachments" id="audioattachment">
      <h3> <?php echo $_smarty_tpl->getConfigVariable('listen');?>
</h3>
        <audio src="<?php echo smarty_function_uri(array('options'=>"articleattachment"),$_smarty_tpl);?>
" controls></audio>
        <a href="<?php echo smarty_function_uri(array('options'=>"articleattachment"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getConfigVariable('downloadAudioFile');?>
 ( .<?php echo $_smarty_tpl->tpl_vars['gimme']->value->attachment->extension;?>
 )</a>
    </div><!-- /#audio-attachment -->
    <?php } elseif ($_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='ogv'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='ogg'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='flv'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='mp4'||$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension=='webm') {?>             
        <?php ob_start();
echo smarty_function_uri(array('options'=>"articleattachment"),$_smarty_tpl);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('videosources', null, 0);
$_smarty_tpl->tpl_vars['videosources']->value[((string)$_smarty_tpl->tpl_vars['gimme']->value->attachment->extension)] = $_tmp1;?>
        <?php if (isset($_smarty_tpl->tpl_vars['hasvideo'])) {$_smarty_tpl->tpl_vars['hasvideo'] = clone $_smarty_tpl->tpl_vars['hasvideo'];
$_smarty_tpl->tpl_vars['hasvideo']->value = true; $_smarty_tpl->tpl_vars['hasvideo']->nocache = null; $_smarty_tpl->tpl_vars['hasvideo']->scope = 0;
} else $_smarty_tpl->tpl_vars['hasvideo'] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
    <div class="article-attachments">
        <h3> <?php echo $_smarty_tpl->getConfigVariable('attachment');?>
</h3>
        <a href="<?php echo smarty_function_uri(array('options'=>"articleattachment"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getConfigVariable('download');?>
 | <?php echo $_smarty_tpl->tpl_vars['gimme']->value->attachment->file_name;?>
 (<?php echo $_smarty_tpl->tpl_vars['gimme']->value->attachment->size_kb;?>
kb)</a>
        <p><?php echo $_smarty_tpl->tpl_vars['gimme']->value->attachment->description;?>
</p>
    </div><!-- /.attachment -->
    <?php }?>

  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_attachments(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
      
  <?php }?>  

  <?php if ($_smarty_tpl->tpl_vars['hasvideo']->value==true) {?>
  <div class="article-attachments" id="videoattachment">
    <h3> <?php echo $_smarty_tpl->getConfigVariable('watch');?>
</h3>
      <div class="flowplayer" data-engine="flash" data-swf="<?php echo smarty_function_url(array('static_file'=>'_js/vendor/flowplayer/flowplayer.swf'),$_smarty_tpl);?>
" data-ratio="0.417">
        <video >
          <?php  $_smarty_tpl->tpl_vars['videoSource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['videoSource']->_loop = false;
 $_smarty_tpl->tpl_vars['extension'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['videosources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['videoSource']->key => $_smarty_tpl->tpl_vars['videoSource']->value) {
$_smarty_tpl->tpl_vars['videoSource']->_loop = true;
 $_smarty_tpl->tpl_vars['extension']->value = $_smarty_tpl->tpl_vars['videoSource']->key;
?>
          <source src="<?php echo $_smarty_tpl->tpl_vars['videoSource']->value;?>
" type='video/<?php if ($_smarty_tpl->tpl_vars['extension']->value=='flv') {?>flash<?php } elseif ($_smarty_tpl->tpl_vars['extension']->value=='ogv') {?>ogg<?php } else {
echo $_smarty_tpl->tpl_vars['extension']->value;
}?>'>
          <?php } ?>
        </video>
      </div>
      <?php  $_smarty_tpl->tpl_vars['videoSource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['videoSource']->_loop = false;
 $_smarty_tpl->tpl_vars['extension'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['videosources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['videoSource']->key => $_smarty_tpl->tpl_vars['videoSource']->value) {
$_smarty_tpl->tpl_vars['videoSource']->_loop = true;
 $_smarty_tpl->tpl_vars['extension']->value = $_smarty_tpl->tpl_vars['videoSource']->key;
?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['videoSource']->value;?>
" class="btn btn-mini btn-red"><?php echo $_smarty_tpl->getConfigVariable('download');?>
 ( .<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
 )</a>
      <?php } ?>
  </div><!-- /#video-attachment --> 
<?php }?>
<?php }} ?>
