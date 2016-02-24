<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:17
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-related.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55911051856ccd761b6b563-99150525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da94b74980c0b1ba18ab1e71c3c726e8f9f0155' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-related.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55911051856ccd761b6b563-99150525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd761bbe488_69728440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd761bbe488_69728440')) {function content_56ccd761bbe488_69728440($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list_related_articles')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_related_articles.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/newscoop/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('list_related_articles', array()); $_block_repeat=true; echo smarty_block_list_related_articles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_beginning) {?>
	<div class="news-sections news-article-related">
		<h2> <?php echo $_smarty_tpl->getConfigVariable('relatedArticles');?>
</h2>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>
    	<h3><a href="<?php echo smarty_function_uri(array(),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</a></h3>
    	<?php echo $_smarty_tpl->getSubTemplate ("_tpl/img/img_thumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['gimme']->value->article->full_text,220,"...",true);?>

	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_end) {?>
    </div>
    <?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_related_articles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
