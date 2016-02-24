<?php /* Smarty version Smarty-3.1.21, created on 2016-02-24 10:37:04
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/sidebar_poll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158312762756cdce200395d5-57256167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24bb59e266c49c4c41353dec4676f6c51d6011e' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/sidebar_poll.tpl',
      1 => 1455823954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158312762756cdce200395d5-57256167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
    'votes' => 0,
    'uriAry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cdce201f3944_49726475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cdce201f3944_49726475')) {function content_56cdce201f3944_49726475($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list_articles')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/block.list_articles.php';
if (!is_callable('smarty_block_list_debates')) include '/var/www/newscoop/plugins/debate/smarty_camp_plugins/block.list_debates.php';
if (!is_callable('smarty_block_list_debate_answers')) include '/var/www/newscoop/plugins/debate/smarty_camp_plugins/block.list_debate_answers.php';
if (!is_callable('smarty_function_math')) include '/var/www/newscoop/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_block_debate_form')) include '/var/www/newscoop/plugins/debate/smarty_camp_plugins/block.debate_form.php';
if (!is_callable('smarty_function_uri')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.uri.php';
if (!is_callable('smarty_function_debateanswer_edit')) include '/var/www/newscoop/plugins/debate/smarty_camp_plugins/function.debateanswer_edit.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['gimme']->value->language->english_name).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="news-sections box-poll">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('list_articles', array('length'=>"1",'ignore_issue'=>"true",'ignore_section'=>"true",'constraints'=>"type is poll")); $_block_repeat=true; echo smarty_block_list_articles(array('length'=>"1",'ignore_issue'=>"true",'ignore_section'=>"true",'constraints'=>"type is poll"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('list_debates', array('length'=>"1",'item'=>"article")); $_block_repeat=true; echo smarty_block_list_debates(array('length'=>"1",'item'=>"article"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->debate_action->defined) {?>
        <h2><span aria-hidden="true" class="icon-bullhorn"></span> <?php echo $_smarty_tpl->tpl_vars['gimme']->value->debate->question;?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['gimme']->value->debate->user_vote_count>=$_smarty_tpl->tpl_vars['gimme']->value->debate->votes_per_user||$_smarty_tpl->tpl_vars['gimme']->value->debate_action->ok) {?>
            <p class="info info-success"><span aria-hidden="true" class="icon-checkmark-circle"></span> <?php echo $_smarty_tpl->getConfigVariable('thankYouPoll');?>
</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['gimme']->value->debate_action->is_error) {?>
            <p class="info info-error"><span aria-hidden="true" class="icon-blocked"></span> <?php echo $_smarty_tpl->getConfigVariable('alreadyVoted');?>
</p>
        <?php }?>                        
        <?php if (isset($_smarty_tpl->tpl_vars["votes"])) {$_smarty_tpl->tpl_vars["votes"] = clone $_smarty_tpl->tpl_vars["votes"];
$_smarty_tpl->tpl_vars["votes"]->value = 0; $_smarty_tpl->tpl_vars["votes"]->nocache = null; $_smarty_tpl->tpl_vars["votes"]->scope = 0;
} else $_smarty_tpl->tpl_vars["votes"] = new Smarty_variable(0, null, 0);?>
        <fieldset id="debate_1_1_form">
          <legend class="acc"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->debate->question;?>
</legend>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_debate_answers', array()); $_block_repeat=true; echo smarty_block_list_debate_answers(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <div class="poll-option">
              <label for="radio<?php echo $_smarty_tpl->tpl_vars['gimme']->value->current_list->index;?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->debateanswer->answer;?>
</label>
              <div class="poll-progress">
                        <div class="bar" style="width:<?php echo smarty_function_math(array('equation'=>"round(x)",'x'=>$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->percentage_overall,'format'=>"%d"),$_smarty_tpl);?>
%;"></div>
                  </div>
              <span class="poll-score"><?php echo smarty_function_math(array('equation'=>"round(x)",'x'=>$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->percentage_overall,'format'=>"%d"),$_smarty_tpl);?>
%</span>
          </div>
            <?php if (isset($_smarty_tpl->tpl_vars["votes"])) {$_smarty_tpl->tpl_vars["votes"] = clone $_smarty_tpl->tpl_vars["votes"];
$_smarty_tpl->tpl_vars["votes"]->value = $_smarty_tpl->tpl_vars['votes']->value+$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->votes; $_smarty_tpl->tpl_vars["votes"]->nocache = null; $_smarty_tpl->tpl_vars["votes"]->scope = 0;
} else $_smarty_tpl->tpl_vars["votes"] = new Smarty_variable($_smarty_tpl->tpl_vars['votes']->value+$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->votes, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->current_list->at_end) {?>
            <p>Number of votes: <?php echo $_smarty_tpl->tpl_vars['votes']->value;?>
</p>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_debate_answers(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </fieldset>
    <?php } else { ?>
       <?php if ($_smarty_tpl->tpl_vars['gimme']->value->debate->is_votable) {?>

            <h2><span aria-hidden="true" class="icon-bullhorn"></span> <?php echo $_smarty_tpl->tpl_vars['gimme']->value->debate->question;?>
</h2> 
            <p class="info-hidden info-no-answer info info-error"><span aria-hidden="true" class="icon-blocked"></span> <?php echo $_smarty_tpl->getConfigVariable('pleaseSelectOneAnswer');?>
</p>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('debate_form', array('template'=>"_tpl/sidebar_poll.tpl",'submit_button'=>((string)$_smarty_tpl->getConfigVariable('pollButton')),'html_code'=>"class=\"poll-button\"")); $_block_repeat=true; echo smarty_block_debate_form(array('template'=>"_tpl/sidebar_poll.tpl",'submit_button'=>((string)$_smarty_tpl->getConfigVariable('pollButton')),'html_code'=>"class=\"poll-button\""), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  
            
                 
            <?php ob_start();?><?php echo smarty_function_uri(array('options'=>"template _tpl/sidebar_poll.tpl"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['uriAry'])) {$_smarty_tpl->tpl_vars['uriAry'] = clone $_smarty_tpl->tpl_vars['uriAry'];
$_smarty_tpl->tpl_vars['uriAry']->value = explode("tpl=",$_tmp1,2); $_smarty_tpl->tpl_vars['uriAry']->nocache = null; $_smarty_tpl->tpl_vars['uriAry']->scope = 0;
} else $_smarty_tpl->tpl_vars['uriAry'] = new Smarty_variable(explode("tpl=",$_tmp1,2), null, 0);?>                        

            <input name="tpl" value="<?php echo $_smarty_tpl->tpl_vars['uriAry']->value[1];?>
" type="hidden">
            <fieldset id="debate_1_1_form">
              <legend class="acc"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->debate->question;?>
</legend>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_debate_answers', array()); $_block_repeat=true; echo smarty_block_list_debate_answers(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <div class="poll-option">
                  <!--input type="radio" id="radio<?php echo $_smarty_tpl->tpl_vars['gimme']->value->current_list->index;?>
" name="radios1" /-->
                  <label for="radio<?php echo $_smarty_tpl->tpl_vars['gimme']->value->current_list->index;?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->debateanswer->answer;?>

                  <?php echo smarty_function_debateanswer_edit(array('html_code'=>"id=\"radio".((string)$_smarty_tpl->tpl_vars['gimme']->value->current_list->index)."\""),$_smarty_tpl);?>

                  <span class="poll-score"><?php echo smarty_function_math(array('equation'=>"round(x)",'x'=>$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->percentage_overall,'format'=>"%d"),$_smarty_tpl);?>
%</span>
                  </label>
                  <div class="poll-progress">
                        <div class="bar" style="width:<?php echo smarty_function_math(array('equation'=>"round(x)",'x'=>$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->percentage_overall,'format'=>"%d"),$_smarty_tpl);?>
%;"></div>
                  </div>
              </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_debate_answers(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_debate_form(array('template'=>"_tpl/sidebar_poll.tpl",'submit_button'=>((string)$_smarty_tpl->getConfigVariable('pollButton')),'html_code'=>"class=\"poll-button\""), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                        
            </fieldset>
       <?php } else { ?>                       
            <h2><span aria-hidden="true" class="icon-bullhorn"></span> <?php echo $_smarty_tpl->tpl_vars['gimme']->value->debate->question;?>
</h2> 
            <?php if ($_smarty_tpl->tpl_vars['gimme']->value->debate->user_vote_count>=$_smarty_tpl->tpl_vars['gimme']->value->debate->votes_per_user) {?>
            <p class="info info-success"><span aria-hidden="true" class="icon-checkmark-circle"></span> <?php echo $_smarty_tpl->getConfigVariable('thankYouPoll');?>
</p>
            <?php }?>
            <fieldset id="debate_1_1_form">
              <legend class="acc"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->debate->question;?>
</legend>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('list_debate_answers', array()); $_block_repeat=true; echo smarty_block_list_debate_answers(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <div class="poll-option">
                  <label for="radio<?php echo $_smarty_tpl->tpl_vars['gimme']->value->current_list->index;?>
"><?php echo $_smarty_tpl->tpl_vars['gimme']->value->debateanswer->answer;?>

                        <span class="poll-score"><?php echo smarty_function_math(array('equation'=>"round(x)",'x'=>$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->percentage_overall,'format'=>"%d"),$_smarty_tpl);?>
%</span> 
                  </label>
                  <div class="poll-progress">
                        <div class="bar" style="width:<?php echo smarty_function_math(array('equation'=>"round(x)",'x'=>$_smarty_tpl->tpl_vars['gimme']->value->debateanswer->percentage_overall,'format'=>"%d"),$_smarty_tpl);?>
%;"></div>
                  </div>
              </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_debate_answers(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

             </fieldset>
       <?php }?>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_debates(array('length'=>"1",'item'=>"article"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list_articles(array('length'=>"1",'ignore_issue'=>"true",'ignore_section'=>"true",'constraints'=>"type is poll"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>
