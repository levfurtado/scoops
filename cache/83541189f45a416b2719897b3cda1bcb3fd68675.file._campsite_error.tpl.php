<?php /* Smarty version Smarty-3.1.21, created on 2016-02-19 17:12:37
         compiled from "/var/www/newscoop/themes/system_templates/_campsite_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95324618156c7935546bbb6-71394704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83541189f45a416b2719897b3cda1bcb3fd68675' => 
    array (
      0 => '/var/www/newscoop/themes/system_templates/_campsite_error.tpl',
      1 => 1436783757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95324618156c7935546bbb6-71394704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteinfo' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56c793554ae005_96458150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c793554ae005_96458150')) {function content_56c793554ae005_96458150($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('dynamic', array()); $_block_repeat=true; echo smarty_block_dynamic(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['title'];?>
</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="<?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['generator'];?>
" />
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['description'];?>
" />
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['keywords'];?>
" />

  <link rel="stylesheet" type="text/css" href="/<?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['templates_path'];?>
/css/_style_offline.css" />
</head>
<body>
<div id="offline">
  <div><img src="/<?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['templates_path'];?>
/img/newscoop_logo_big.png" />
  <div>Error: <?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['error_message'];?>
</div>
</div>
</body>
</html>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
