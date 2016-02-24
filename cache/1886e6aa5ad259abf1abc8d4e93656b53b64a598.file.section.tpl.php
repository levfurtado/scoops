<?php /* Smarty version Smarty-3.1.21, created on 2016-02-22 17:09:18
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45439892656cb870e50a0f4-32992933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1886e6aa5ad259abf1abc8d4e93656b53b64a598' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/section.tpl',
      1 => 1455918533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45439892656cb870e50a0f4-32992933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cb870e558f79_47172221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb870e558f79_47172221')) {function content_56cb870e558f79_47172221($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['gimme']->value->language->english_name).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body id="body">
<!--[if lt IE 7]>
    <p class="chromeframe"><?php echo $_smarty_tpl->getConfigVariable('outdatedBrowser');?>
</p>
<![endif]-->

<?php echo $_smarty_tpl->getSubTemplate ("_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<main role="main" class="site-section main" id="main">

    <section class="main-alpha">
      <!--section -->
      <!-- <h2 class="hl-alpha">skrilla</h2> -->
      <h2 class="hl-alpha"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->section->name;?>
</h2>
    	<?php echo $_smarty_tpl->getSubTemplate ("_tpl/section-cont.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <h2>HERE</h2>
    </section>
    <aside class="main-beta clearfix" role="complementary">
    	<?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_ad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </aside>
</main>

<?php echo $_smarty_tpl->getSubTemplate ("_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
