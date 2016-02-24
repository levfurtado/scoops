<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:13
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204672502456ccd75d5aedd4-21586527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17bddf29f443f67c1671412a85d1f683c08df78e' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/404.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204672502456ccd75d5aedd4-21586527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd75d5f7ea8_06904754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd75d5f7ea8_06904754')) {function content_56ccd75d5f7ea8_06904754($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['gimme']->value->language->english_name).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body id="body">
<!--[if lt IE 7]>
    <p class="chromeframe"><?php echo $_smarty_tpl->getConfigVariable('outdatedBrowser');?>
</p>
<![endif]-->
          
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<main role="main" class="main site-front" id="main">
    <section class="main-alpha">
	    <h1><?php echo $_smarty_tpl->getConfigVariable('notFoundMessage');?>
</h1> 
    </section>
    <aside class="main-beta clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_ad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </aside>
</main> <!-- end main role main -->

<?php echo $_smarty_tpl->getSubTemplate ("_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
