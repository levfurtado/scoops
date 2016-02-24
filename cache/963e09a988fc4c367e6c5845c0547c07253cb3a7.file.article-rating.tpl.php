<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:17
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69393303556ccd761cf7c50-65598954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '963e09a988fc4c367e6c5845c0547c07253cb3a7' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-rating.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69393303556ccd761cf7c50-65598954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd761d19e01_61673633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd761d19e01_61673633')) {function content_56ccd761d19e01_61673633($_smarty_tpl) {?><div class="article-rating article-attachments">
    <h3><?php echo $_smarty_tpl->getConfigVariable('articleRating');?>
 : </h3>
    <div id="<?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->number;?>
" class="rate_widget">
        <ul class="stars">
            <li class="star_1 ratings_stars">1 <?php echo $_smarty_tpl->getConfigVariable('outOf');?>
 5</li>
            <li class="star_2 ratings_stars">2 <?php echo $_smarty_tpl->getConfigVariable('outOf');?>
 5</li>
            <li class="star_3 ratings_stars">3 <?php echo $_smarty_tpl->getConfigVariable('outOf');?>
 5</li>
            <li class="star_4 ratings_stars">4 <?php echo $_smarty_tpl->getConfigVariable('outOf');?>
 5</li>
            <li class="star_5 ratings_stars">5 <?php echo $_smarty_tpl->getConfigVariable('outOf');?>
 5</li>
        </ul>
        <p class="total_votes"></p>
        <p class="rating_error"></p>
    </div>
</div><?php }} ?>
