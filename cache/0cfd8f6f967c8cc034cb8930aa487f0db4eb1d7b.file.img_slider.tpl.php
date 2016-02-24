<?php /* Smarty version Smarty-3.1.21, created on 2016-02-24 10:37:03
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/img/img_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4583984056cdce1f83dd63-40124547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cfd8f6f967c8cc034cb8930aa487f0db4eb1d7b' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/img/img_slider.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4583984056cdce1f83dd63-40124547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cdce1f8b8763_07266235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cdce1f8b8763_07266235')) {function content_56cdce1f8b8763_07266235($_smarty_tpl) {?><?php if (!is_callable('smarty_block_image')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.image.php';
?><div data-picture data-alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('rendition'=>"slidersmall")); $_block_repeat=true; echo smarty_block_image(array('rendition'=>"slidersmall"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['image']->value->caption;?>
 (photo: <?php echo $_smarty_tpl->tpl_vars['image']->value->photographer;?>
)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_image(array('rendition'=>"slidersmall"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('rendition'=>"slidersmall")); $_block_repeat=true; echo smarty_block_image(array('rendition'=>"slidersmall"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div data-src="<?php echo $_smarty_tpl->tpl_vars['image']->value->src;?>
"></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_image(array('rendition'=>"slidersmall"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('rendition'=>"slidermedium")); $_block_repeat=true; echo smarty_block_image(array('rendition'=>"slidermedium"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div data-src="<?php echo $_smarty_tpl->tpl_vars['image']->value->src;?>
" data-media="(min-width: 321px)"></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_image(array('rendition'=>"slidermedium"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('rendition'=>"sliderbig")); $_block_repeat=true; echo smarty_block_image(array('rendition'=>"sliderbig"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div data-src="<?php echo $_smarty_tpl->tpl_vars['image']->value->src;?>
" data-media="(min-width: 640px)"></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_image(array('rendition'=>"sliderbig"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<!--[if (lt IE 9) & (!IEMobile)]>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('rendition'=>"sliderbig")); $_block_repeat=true; echo smarty_block_image(array('rendition'=>"sliderbig"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->src;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->caption;?>
 (photo: <?php echo $_smarty_tpl->tpl_vars['image']->value->photographer;?>
)">
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_image(array('rendition'=>"sliderbig"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    	<![endif]-->

		<noscript>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('image', array('rendition'=>"slidersmall")); $_block_repeat=true; echo smarty_block_image(array('rendition'=>"slidersmall"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->src;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->caption;?>
 (photo: <?php echo $_smarty_tpl->tpl_vars['image']->value->photographer;?>
)">
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_image(array('rendition'=>"slidersmall"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</noscript>
  </div><?php }} ?>
