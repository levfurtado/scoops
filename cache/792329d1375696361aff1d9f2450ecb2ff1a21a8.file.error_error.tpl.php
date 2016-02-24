<?php /* Smarty version Smarty-3.1.21, created on 2016-02-22 16:22:36
         compiled from "/var/www/newscoop/application/views/scripts/error_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72232002056cb7c1c2c9da8-95759024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792329d1375696361aff1d9f2450ecb2ff1a21a8' => 
    array (
      0 => '/var/www/newscoop/application/views/scripts/error_error.tpl',
      1 => 1436783757,
      2 => 'file',
    ),
    '5f05901c9840d9845b68f8acf9e5ab85eb0547bb' => 
    array (
      0 => '/var/www/newscoop/application/views/scripts/layout.tpl',
      1 => 1436783757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72232002056cb7c1c2c9da8-95759024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cb7c1c3c52f2_89113902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb7c1c3c52f2_89113902')) {function content_56cb7c1c3c52f2_89113902($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_camp_date_format')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/modifier.camp_date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Newcoop</title>

    
        <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['view']->value->headLink();?>

        <?php }?>
    

    
        <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['view']->value->headScript();?>

        <?php }?>
    
</head>
<body>
    <div class="header">
        Newscoop
        <div class="nav">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'index','action'=>'index'),'default');?>
">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'user','action'=>'index'),'default');?>
">Users</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'register','action'=>'index'),'default');?>
">Register</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value->url(array('controller'=>'auth','action'=>'index'),'default');?>
">Sign in</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('dynamic', array()); $_block_repeat=true; echo smarty_block_dynamic(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="span error-page">
<h1>Hey, this is error!</h1>

<h2>Error: <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>

<?php if (isset($_smarty_tpl->tpl_vars['exception']->value)) {?>
    <h3>Exception information</h3>
    <p>
        <b>Type:</b> <?php echo get_class($_smarty_tpl->tpl_vars['exception']->value);?>

        <br />
        <b>Code:</b> <?php echo $_smarty_tpl->tpl_vars['exception']->value->getCode();?>

        <br />
        <b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['exception']->value->getMessage();?>

        <br />
        <b>File:</b> <?php echo $_smarty_tpl->tpl_vars['exception']->value->getFile();?>
 <b>:</b> <?php echo $_smarty_tpl->tpl_vars['exception']->value->getLine();?>

    </p>

    <h3>Stack trace</h3>
    <pre><?php echo $_smarty_tpl->tpl_vars['exception']->value->getTraceAsString();?>
</pre>

    <h3>Request Parameters</h3>
    <pre><?php echo ladybug_dump($_smarty_tpl->tpl_vars['request']->value);?>
</pre>
<?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_dynamic(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    </div>

    <div class="footer">
    
    &copy; <?php echo smarty_modifier_camp_date_format(time(),"%Y");?>
 Sourcefabric o.p.s.
    
    </div>
</body>
</html>
<?php }} ?>
