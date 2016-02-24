<?php /* Smarty version Smarty-3.1.21, created on 2016-02-24 10:37:03
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/front-stories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71038578456cdce1f73ab51-43418797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43929fac5395294431ed1fcdd5f4349a4cf66e4f' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/front-stories.tpl',
      1 => 1456264856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71038578456cdce1f73ab51-43418797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cdce1f767392_67553012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cdce1f767392_67553012')) {function content_56cdce1f767392_67553012($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list_playlist_articles')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_playlist_articles.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
?><div class="news-featured" id="slider-front">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('list_playlist_articles', array('id'=>"10",'length'=>"4")); $_block_repeat=true; echo smarty_block_list_playlist_articles(array('id'=>"10",'length'=>"4"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="news-featured-inner">
        <h2><a href="<?php echo smarty_function_uri(array('option'=>'article'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</a></h2>
        <h3><?php echo $_smarty_tpl->tpl_vars['gimme']->value->section->name;?>
</h3>
        <a href="<?php echo smarty_function_uri(array('option'=>'article'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getSubTemplate ("_tpl/img/img_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</a>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_playlist_articles(array('id'=>"10",'length'=>"4"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><!-- end front-stories.tpl -->
<?php }} ?>
