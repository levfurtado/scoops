<?php /* Smarty version Smarty-3.1.21, created on 2016-02-24 10:37:03
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117371375956cdce1f5ff0b7-58184876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99942dafa3752d9eff64ba916a16a102f4c435b4' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/header.tpl',
      1 => 1456256477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117371375956cdce1f5ff0b7-58184876',
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
  'unifunc' => 'content_56cdce1f6e1753_08944479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cdce1f6e1753_08944479')) {function content_56cdce1f6e1753_08944479($_smarty_tpl) {?><?php if (!is_callable('smarty_block_local')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.local.php';
if (!is_callable('smarty_function_set_current_issue')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.set_current_issue.php';
if (!is_callable('smarty_block_list_sections')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_sections.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
if (!is_callable('smarty_block_search_form')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.search_form.php';
?>  <ul class="skiplinks">
    <li class="acc"><a href="#main">Skip to content</a></li>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('local', array()); $_block_repeat=true; echo smarty_block_local(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_set_current_issue(array(),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_sections', array()); $_block_repeat=true; echo smarty_block_list_sections(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      <li<?php if (($_smarty_tpl->tpl_vars['gimme']->value->section->number==$_smarty_tpl->tpl_vars['gimme']->value->default_section->number)&&($_smarty_tpl->tpl_vars['gimme']->value->template->name=="section.tpl"||$_smarty_tpl->tpl_vars['gimme']->value->template->name=="article.tpl")) {?> class="acc nav-current"<?php } else { ?> class="acc"<?php }?>><a href="<?php echo smarty_function_uri(array('options'=>"section"),$_smarty_tpl);?>
">Skip to <?php echo $_smarty_tpl->tpl_vars['gimme']->value->section->name;?>
</a></li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_sections(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_local(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </ul>
  <header class="header-main clearfix" role="banner">
    <!--header lolio-->
    <ul class="nav-top">
    <!--  <li><span><?php echo $_smarty_tpl->getConfigVariable('language');?>
: <a href="#">En</a> | <a href="#">De</a></span></li>-->
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'user','action'=>'index'),'default');?>
" title="Community index"><?php echo $_smarty_tpl->getConfigVariable('community');?>
</a></li>
      <?php if (!$_smarty_tpl->tpl_vars['gimme']->value->user->logged_in) {?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'auth','action'=>'index'),'default');?>
"> <?php echo $_smarty_tpl->getConfigVariable('login');?>
 </a></li>
      <?php } else { ?>
      <li><a href='<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('username'=>$_smarty_tpl->tpl_vars['gimme']->value->user->uname),'user');?>
'><?php echo $_smarty_tpl->getConfigVariable('profile');?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'auth','action'=>'logout'),'default');?>
"><?php echo $_smarty_tpl->getConfigVariable('logout');?>
</a></li>
      <?php }?>
    </ul>

    <h1 class="logo-header"><a class="logo-alpha" href="#">CCC</a></h1>

    <a href="#body" class="nav-link nav-link-open icon-list"> <?php echo $_smarty_tpl->getConfigVariable('sections');?>
</a>
    <a href="#" class="nav-link nav-link-close icon-list"> <?php echo $_smarty_tpl->getConfigVariable('sections');?>
</a>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('search_form', array('template'=>"search.tpl",'submit_button'=>"Search",'html_code'=>"role=\"search\" class=\"search-field-alpha\"")); $_block_repeat=true; echo smarty_block_search_form(array('template'=>"search.tpl",'submit_button'=>"Search",'html_code'=>"role=\"search\" class=\"search-field-alpha\""), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      <label class="acc" for="f_search_keywords"><?php echo $_smarty_tpl->getConfigVariable('search');?>
</label>
      <input classs="inp-f" id="f_search_keywords" type="search" required aria-required="true" placeholder="<?php echo $_smarty_tpl->getConfigVariable('keywords');?>
" name="f_search_keywords">
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_search_form(array('template'=>"search.tpl",'submit_button'=>"Search",'html_code'=>"role=\"search\" class=\"search-field-alpha\""), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



    <nav id="nav-top" class="nav-alpha nav" role="navigation">
      <ul>
        <li<?php if ($_smarty_tpl->tpl_vars['gimme']->value->template->name=="front.tpl") {?> class="nav-current"<?php }?>><a class="ease" href="/"><?php echo $_smarty_tpl->getConfigVariable('home');?>
</a></li>
        <?php echo smarty_function_set_current_issue(array(),$_smarty_tpl);?>

        <li>
          <a href="">Sections</a>
          <ul class="submenu">
            <li><a href="#">Chatham News</a></li>
            <li><a href="#">Harwich News</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Opinion</a></li>
            <li><a href="#">Obituaries</a></li>
          </ul>
        </li>
        <li><a href="">Advertising</a></li>
        <li><a href="">Archives</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Subscribe</a></li>
        </ul>
    </nav>
</header>
<?php }} ?>
