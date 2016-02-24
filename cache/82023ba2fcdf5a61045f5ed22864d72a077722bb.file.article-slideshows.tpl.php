<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:18
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-slideshows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137744746756ccd7620c2781-91111190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82023ba2fcdf5a61045f5ed22864d72a077722bb' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-slideshows.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137744746756ccd7620c2781-91111190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
    'slideshow' => 0,
    'counter1' => 0,
    'counter' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd762134267_05943430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd762134267_05943430')) {function content_56ccd762134267_05943430($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars["counter1"])) {$_smarty_tpl->tpl_vars["counter1"] = clone $_smarty_tpl->tpl_vars["counter1"];
$_smarty_tpl->tpl_vars["counter1"]->value = 0; $_smarty_tpl->tpl_vars["counter1"]->nocache = null; $_smarty_tpl->tpl_vars["counter1"]->scope = 0;
} else $_smarty_tpl->tpl_vars["counter1"] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['slideshow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slideshow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gimme']->value->article->slideshows; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slideshow']->key => $_smarty_tpl->tpl_vars['slideshow']->value) {
$_smarty_tpl->tpl_vars['slideshow']->_loop = true;
?>            
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slideshow']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>      
	<?php if (isset($_smarty_tpl->tpl_vars["counter1"])) {$_smarty_tpl->tpl_vars["counter1"] = clone $_smarty_tpl->tpl_vars["counter1"];
$_smarty_tpl->tpl_vars["counter1"]->value = 2; $_smarty_tpl->tpl_vars["counter1"]->nocache = null; $_smarty_tpl->tpl_vars["counter1"]->scope = 0;
} else $_smarty_tpl->tpl_vars["counter1"] = new Smarty_variable(2, null, 0);?>             
<?php } ?>
<?php } ?>
<div class="news-sections box-ad" id="imageattachment">
    <?php if ($_smarty_tpl->tpl_vars['counter1']->value=="2") {?>
	<h2>Slideshow</h2>
    <?php }?>
<?php  $_smarty_tpl->tpl_vars['slideshow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slideshow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gimme']->value->article->slideshows; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slideshow']->key => $_smarty_tpl->tpl_vars['slideshow']->value) {
$_smarty_tpl->tpl_vars['slideshow']->_loop = true;
?>

	<div id="gallery" class="galleria-wrapper">
	<?php if (isset($_smarty_tpl->tpl_vars["style"])) {$_smarty_tpl->tpl_vars["style"] = clone $_smarty_tpl->tpl_vars["style"];
$_smarty_tpl->tpl_vars["style"]->value = 'true'; $_smarty_tpl->tpl_vars["style"]->nocache = null; $_smarty_tpl->tpl_vars["style"]->scope = 0;
} else $_smarty_tpl->tpl_vars["style"] = new Smarty_variable('true', null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars["counter"])) {$_smarty_tpl->tpl_vars["counter"] = clone $_smarty_tpl->tpl_vars["counter"];
$_smarty_tpl->tpl_vars["counter"]->value = 0; $_smarty_tpl->tpl_vars["counter"]->nocache = null; $_smarty_tpl->tpl_vars["counter"]->scope = 0;
} else $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>              
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slideshow']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>      
		<?php if (isset($_smarty_tpl->tpl_vars["counter"])) {$_smarty_tpl->tpl_vars["counter"] = clone $_smarty_tpl->tpl_vars["counter"];
$_smarty_tpl->tpl_vars["counter"]->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars["counter"]->nocache = null; $_smarty_tpl->tpl_vars["counter"]->scope = 0;
} else $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->src;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value->caption;?>
" />                
	<?php } ?>
	</div>
<?php } ?>
</div><?php }} ?>
