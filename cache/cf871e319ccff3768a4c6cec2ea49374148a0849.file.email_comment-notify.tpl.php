<?php /* Smarty version Smarty-3.1.21, created on 2016-02-22 16:22:36
         compiled from "/var/www/newscoop/application/views/scripts/email_comment-notify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85331634156cb7c1c1ef0b8-49869311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf871e319ccff3768a4c6cec2ea49374148a0849' => 
    array (
      0 => '/var/www/newscoop/application/views/scripts/email_comment-notify.tpl',
      1 => 1436783757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85331634156cb7c1c1ef0b8-49869311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 1,
    'comment' => 1,
    'publication' => 1,
    'articleLink' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cb7c1c2495e5_11172421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb7c1c2495e5_11172421')) {function content_56cb7c1c2495e5_11172421($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_placeholder')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.set_placeholder.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('dynamic', array()); $_block_repeat=true; echo smarty_block_dynamic(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

New comment from <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->getSubject(), ENT_QUOTES, 'UTF-8', true);?>
<br />
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->getMessage(), ENT_QUOTES, 'UTF-8', true);?>
<br /><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['publication']->value;
echo $_smarty_tpl->tpl_vars['articleLink']->value;?>
">Go to Article</a><br />
<a href="<?php echo $_smarty_tpl->tpl_vars['publication']->value;
echo $_smarty_tpl->tpl_vars['articleLink']->value;?>
#comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value->getId();?>
">Go to Comment</a><br />
<?php echo smarty_function_set_placeholder(array('subject'=>"New comment"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
