<?php /* Smarty version Smarty-3.1.21, created on 2016-02-23 17:04:17
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-cont.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143917860856ccd76175a3f3-60351705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'affe700ad12ef8e055436ddc246f218c8cfe7c40' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/article-cont.tpl',
      1 => 1456175444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143917860856ccd76175a3f3-60351705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56ccd7618e8856_19373336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccd7618e8856_19373336')) {function content_56ccd7618e8856_19373336($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/newscoop/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_camp_date_format')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/modifier.camp_date_format.php';
if (!is_callable('smarty_block_list_article_authors')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_article_authors.php';
if (!is_callable('smarty_block_list_article_locations')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_article_locations.php';
if (!is_callable('smarty_block_list_article_topics')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_article_topics.php';
if (!is_callable('smarty_function_url')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.url.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
?><!-- MAIN ARTICLE -->
<h2>Article Cont!!</h2>
<article class="main-article single">
       <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->content_accessible) {?>

        <header>
            <time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['gimme']->value->article->publish_date,"%Y-%m-%dT%H:%MZ");?>
"><?php echo smarty_modifier_camp_date_format($_smarty_tpl->tpl_vars['gimme']->value->article->publish_date,"%d %M %Y");?>
</time>
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>
            <a href="#comments"  class="news-section-comments">
            <span aria-hidden="true" class="icon-bubble"></span>
                <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->comment_count==1) {?>
                    <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->comment_count;?>
 <?php echo $_smarty_tpl->getConfigVariable('comment');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->comment_count;?>
 <?php echo $_smarty_tpl->getConfigVariable('comments');?>

                <?php }?>
            </a>
            <?php }?>
            <h2 class="hl-alpha"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->name;?>
</h2>
            <!--here-->
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>

                <p><?php echo $_smarty_tpl->getConfigVariable('By');?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_authors', array()); $_block_repeat=true; echo smarty_block_list_article_authors(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->author->user->defined) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('username'=>$_smarty_tpl->tpl_vars['gimme']->value->author->user->uname),'user');?>
">
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['gimme']->value->author->name;?>

                    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->author->user->defined) {?>
                        </a>
                    <?php }?>
                    <small>(<?php echo $_smarty_tpl->tpl_vars['gimme']->value->author->type;?>
)</small>
                    <?php if (!$_smarty_tpl->tpl_vars['gimme']->value->current_list->at_end) {?>
                        ,
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_authors(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </p>
                <?php if (!$_smarty_tpl->tpl_vars['gimme']->value->article->has_map) {?>
                <p><span aria-hidden="true" class="icon-location"></span> <?php echo $_smarty_tpl->getConfigVariable('locations');?>
:

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_locations', array()); $_block_repeat=true; echo smarty_block_list_article_locations(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->location->enabled) {?>
                        <?php echo $_smarty_tpl->tpl_vars['gimme']->value->location->name;?>

                        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_end) {?>
                        <?php } else { ?>
                            ,
                        <?php }?>
                    <?php }?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_locations(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </p>
                <?php }?>
                <p>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_article_topics', array()); $_block_repeat=true; echo smarty_block_list_article_topics(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_beginning) {?>
                        <span aria-hidden="true" class="icon-tags"></span> <?php echo $_smarty_tpl->getConfigVariable('topics');?>

                    <?php }?>
                    <a href="<?php echo smarty_function_url(array('options'=>"template topic.tpl"),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->topic->name;?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_end) {?>

                    <?php } else { ?>
                        ,
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_article_topics(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </p>
            <?php }?>
        </header>
        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/img/img_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/_edit-article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="article-fulltext">
            <?php echo $_smarty_tpl->tpl_vars['gimme']->value->article->full_text;?>

        </div>
        <ul class="article-social">
            <li>
                <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true">Tweet</a>
            </li>

            <li>
                <div id="fb-root"></div>
                <fb:like href="http://<?php echo $_smarty_tpl->tpl_vars['gimme']->value->publication->site;
echo smarty_function_uri(array(),$_smarty_tpl);?>
" send="false" layout="button_count" show_faces="false"></fb:like>
            </li>

            <li>
                <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="120"></div>
            </li>

        </ul>
        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-related.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-attachments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->article->type_name=="news") {?>

            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("_tpl/article-comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php }?>

    <?php } else { ?>
    <header>
        <h2 class="hl-alpha"><?php echo $_smarty_tpl->getConfigVariable('infoOnLockedArticlesHeadline');?>
</h2>
        <p class="info info-error"><?php echo $_smarty_tpl->getConfigVariable('infoOnLockedArticles');?>
</p>
    </header>
    <?php }?>

</article>
<?php }} ?>
