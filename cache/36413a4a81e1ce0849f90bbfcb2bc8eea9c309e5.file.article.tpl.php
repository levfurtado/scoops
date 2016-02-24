<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:17
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96568374456ccd7612fe562-54316258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36413a4a81e1ce0849f90bbfcb2bc8eea9c309e5' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/article.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96568374456ccd7612fe562-54316258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd761391017_43371512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd761391017_43371512')) {function content_56ccd761391017_43371512($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['gimme']->value->language->english_name).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body id="body">
<!--[if lt IE 7]>
    <p class="chromeframe"><?php echo $_smarty_tpl->getConfigVariable('outdatedBrowser');?>
</p>
<![endif]-->
          
<?php echo $_smarty_tpl->getSubTemplate ("_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<main role="main" class="main site-article" id="main">
    <section class="main-alpha">
    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="debate") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-debate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-cont.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    </section>
    <aside class="main-beta clearfix" role="complementary">
        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="debate") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/debate-voting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-slideshows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
        
        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/sidebar_ad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </aside>
</main>

<?php echo $_smarty_tpl->getSubTemplate ("_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("_tpl/_html-foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
