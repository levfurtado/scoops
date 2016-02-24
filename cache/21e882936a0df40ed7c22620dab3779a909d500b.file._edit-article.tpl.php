<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:17
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/_edit-article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132355990856ccd761afd002-13605923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e882936a0df40ed7c22620dab3779a909d500b' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/_edit-article.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132355990856ccd761afd002-13605923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd761b463c8_32239161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd761b463c8_32239161')) {function content_56ccd761b463c8_32239161($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['gimme']->value->user->is_admin) {?>
<a href="http://<?php echo $_smarty_tpl->tpl_vars['gimme']->value->publication->site;?>
/admin/articles/edit.php?f_publication_id=<?php echo $_smarty_tpl->tpl_vars['gimme']->value->publication->identifier;?>
&f_issue_number=<?php echo $_smarty_tpl->tpl_vars['gimme']->value->issue->number;?>
&f_section_number=<?php echo $_smarty_tpl->tpl_vars['gimme']->value->section->number;?>
&f_article_number=<?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->number;?>
&f_language_id=<?php echo $_smarty_tpl->tpl_vars['gimme']->value->language->number;?>
&f_language_selected=<?php echo $_smarty_tpl->tpl_vars['gimme']->value->language->number;?>
" target="_blank" 
style="" title="Edit article">
<span aria-hidden="true" class="icon-cog"></span> <?php echo $_smarty_tpl->getConfigVariable('editArticle');?>

</a>
<?php }?><?php }} ?>
