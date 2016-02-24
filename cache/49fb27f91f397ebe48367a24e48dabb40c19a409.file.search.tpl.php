<?php /* Smarty version Smarty-3.1.21, created on 2016-02-18 17:02:08
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10929110256c63f601152d4-66244380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49fb27f91f397ebe48367a24e48dabb40c19a409' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/search.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10929110256c63f601152d4-66244380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56c63f6016ab00_30075726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c63f6016ab00_30075726')) {function content_56c63f6016ab00_30075726($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['gimme']->value->language->english_name).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
<!--[if lt IE 7]>
    <p class="chromeframe"><?php echo $_smarty_tpl->getConfigVariable('outdatedBrowser');?>
</p>
<![endif]-->
          
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<main role="main" class="main site-section">
    <section class="main-alpha">
        <h1><?php echo $_smarty_tpl->getConfigVariable('searchResults');?>
</h1>

        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/search-cont.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </section>
    <aside class="main-beta clearfix" role="complementary">
        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_ad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </aside>
</main>

<?php echo $_smarty_tpl->getSubTemplate ("_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
