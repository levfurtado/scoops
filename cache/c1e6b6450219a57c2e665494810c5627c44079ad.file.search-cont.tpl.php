<?php /* Smarty version Smarty-3.1.21, created on 2016-02-18 17:02:08
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/search-cont.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35169320856c63f601c7960-35079717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e6b6450219a57c2e665494810c5627c44079ad' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/search-cont.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35169320856c63f601c7960-35079717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
    'pages' => 0,
    'i' => 0,
    'curlistid' => 0,
    'curpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56c63f603aaa82_02004578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c63f603aaa82_02004578')) {function content_56c63f603aaa82_02004578($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list_search_results')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_search_results.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/newscoop/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_camp_date_format')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/modifier.camp_date_format.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
if (!is_callable('smarty_function_uripath')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uripath.php';
if (!is_callable('smarty_function_urlparameters')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.urlparameters.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('list_search_results', array('length'=>"5",'order'=>"bypublishdate desc")); $_block_repeat=true; echo smarty_block_list_search_results(array('length'=>"5",'order'=>"bypublishdate desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_beginning) {?>
    <p><?php echo $_smarty_tpl->tpl_vars['gimme']->value->current_list->count;?>
 <?php echo $_smarty_tpl->getConfigVariable('resultsFor');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['gimme']->value->search_articles_action->search_phrase;?>
</strong></p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>
    <article class="news-sections">
        <time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['gimme']->value->article->publish_date,"%Y-%m-%dT%H:%MZ");?>
"><?php echo smarty_modifier_camp_date_format($_smarty_tpl->tpl_vars['gimme']->value->article->publish_date,"%M %e, %Y");?>
</time>
        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->comment_count>0) {?>
        <a href="<?php echo smarty_function_uri(array('option'=>'article'),$_smarty_tpl);?>
#comments" class="news-section-comments">
        <span aria-hidden="true" class="icon-bubble"></span>
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->comment_count==1) {?>
                <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->comment_count;?>
 <span class="acc"><?php echo $_smarty_tpl->getConfigVariable('comment');?>
 <?php echo $_smarty_tpl->getConfigVariable('for');?>
 <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</span>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->comment_count;?>
 <span class="acc"><?php echo $_smarty_tpl->getConfigVariable('comments');?>
 <?php echo $_smarty_tpl->getConfigVariable('for');?>
 <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</span>
            <?php }?>
        </a>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['gimme']->value->article->content_accessible) {?>
        <span class="label label-premium"><span aria-hidden="true" class="icon-lock"></span> <?php echo $_smarty_tpl->getConfigVariable('premium');?>
</span>
        <?php }?>
        <h2><a href="<?php echo smarty_function_uri(array('options'=>"article"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</a></h2>
        <a href="<?php echo smarty_function_uri(array('options'=>"article"),$_smarty_tpl);?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/img/img_rectangle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </a>
        <p class="article-excerpt">
            <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->deck;?>

            <a class="link-more" href="<?php echo smarty_function_uri(array('options'=>"article"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getConfigVariable('readMore');?>
 <span class="acc"><?php echo $_smarty_tpl->getConfigVariable('from');?>
 <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</span></a>  
        </p>  
    </article>
    <?php }?>
<?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_end) {?>            

    
    <?php if (isset($_smarty_tpl->tpl_vars['pages'])) {$_smarty_tpl->tpl_vars['pages'] = clone $_smarty_tpl->tpl_vars['pages'];
$_smarty_tpl->tpl_vars['pages']->value = ceil($_smarty_tpl->tpl_vars['gimme']->value->current_list->count/5); $_smarty_tpl->tpl_vars['pages']->nocache = null; $_smarty_tpl->tpl_vars['pages']->scope = 0;
} else $_smarty_tpl->tpl_vars['pages'] = new Smarty_variable(ceil($_smarty_tpl->tpl_vars['gimme']->value->current_list->count/5), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['curpage'])) {$_smarty_tpl->tpl_vars['curpage'] = clone $_smarty_tpl->tpl_vars['curpage'];
$_smarty_tpl->tpl_vars['curpage']->value = intval($_smarty_tpl->tpl_vars['gimme']->value->url->get_parameter($_smarty_tpl->tpl_vars['gimme']->value->current_list_id())); $_smarty_tpl->tpl_vars['curpage']->nocache = null; $_smarty_tpl->tpl_vars['curpage']->scope = 0;
} else $_smarty_tpl->tpl_vars['curpage'] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['gimme']->value->url->get_parameter($_smarty_tpl->tpl_vars['gimme']->value->current_list_id())), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['pages']->value>1) {?>
    <div class="pagination">
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->has_previous_elements) {?><li class="prev"><a rel="prev" href="<?php echo smarty_function_uripath(array('options'=>"section"),$_smarty_tpl);?>
?<?php echo smarty_function_urlparameters(array('options'=>"previous_items"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getConfigVariable('previous');?>
</a></li><?php }?>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['pages']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if (isset($_smarty_tpl->tpl_vars['curlistid'])) {$_smarty_tpl->tpl_vars['curlistid'] = clone $_smarty_tpl->tpl_vars['curlistid'];
$_smarty_tpl->tpl_vars['curlistid']->value = $_smarty_tpl->tpl_vars['i']->value*5; $_smarty_tpl->tpl_vars['curlistid']->nocache = null; $_smarty_tpl->tpl_vars['curlistid']->scope = 0;
} else $_smarty_tpl->tpl_vars['curlistid'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value*5, null, 0);?>
                <?php echo $_smarty_tpl->tpl_vars['gimme']->value->url->set_parameter($_smarty_tpl->tpl_vars['gimme']->value->current_list_id(),$_smarty_tpl->tpl_vars['curlistid']->value);?>

                <?php if ($_smarty_tpl->tpl_vars['curlistid']->value!=$_smarty_tpl->tpl_vars['curpage']->value) {?>
            <li><a href="<?php echo smarty_function_uripath(array('options'=>"section"),$_smarty_tpl);?>
?<?php echo smarty_function_urlparameters(array(),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a></li>
                <?php } else { ?>
            <li class="selected"><a href="<?php echo smarty_function_uripath(array('options'=>"section"),$_smarty_tpl);?>
?<?php echo smarty_function_urlparameters(array(),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['remi'])) {$_smarty_tpl->tpl_vars['remi'] = clone $_smarty_tpl->tpl_vars['remi'];
$_smarty_tpl->tpl_vars['remi']->value = $_smarty_tpl->tpl_vars['i']->value+1; $_smarty_tpl->tpl_vars['remi']->nocache = null; $_smarty_tpl->tpl_vars['remi']->scope = 0;
} else $_smarty_tpl->tpl_vars['remi'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                <?php }?>
            <?php }} ?>
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->has_next_elements) {?><li class="next"><a rel="next" href="<?php echo smarty_function_uripath(array('options'=>"section"),$_smarty_tpl);?>
?<?php echo smarty_function_urlparameters(array('options'=>"next_items"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getConfigVariable('next');?>
</a></li><?php }?>
        </ul>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['gimme']->value->url->set_parameter($_smarty_tpl->tpl_vars['gimme']->value->current_list_id(),$_smarty_tpl->tpl_vars['curpage']->value);?>

    <?php }?>

<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_search_results(array('length'=>"5",'order'=>"bypublishdate desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 

<?php if ($_smarty_tpl->tpl_vars['gimme']->value->prev_list_empty) {?>
  <p><?php echo $_smarty_tpl->getConfigVariable('noResultsFound');?>
 <strong>"<?php echo $_smarty_tpl->tpl_vars['gimme']->value->search_articles_action->search_phrase;?>
"</strong>.</p>
<?php }?>
<?php }} ?>
