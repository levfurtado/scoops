<?php /* Smarty version Smarty-3.1.21, created on 2016-02-24 10:37:04
         compiled from "/var/www/newscoop/themes/publication_1/theme_1/_tpl/_html-foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30044314056cdce2047c479-54531358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e787b4b285224a02399b4f4045b7f901e32cfd59' => 
    array (
      0 => '/var/www/newscoop/themes/publication_1/theme_1/_tpl/_html-foot.tpl',
      1 => 1455830257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30044314056cdce2047c479-54531358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gimme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56cdce204c2328_33547023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cdce204c2328_33547023')) {function content_56cdce204c2328_33547023($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/var/www/newscoop/application/../include/smarty/campsite_plugins/function.url.php';
?>   <!-- jQuery Library -->
    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('static_file'=>'_js/vendor/jquery-1.9.1.min.js'),$_smarty_tpl);?>
"><\/script>')<?php echo '</script'; ?>
>
    <!-- picturefill -->
    <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('static_file'=>"_js/matchmedia.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('static_file'=>"_js/picturefill.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('static_file'=>"_js/slider.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    window.innerWidth>500&&$(function(){$("#slider-front").addClass("news-slider"),$("#slider-front").responsiveSlides({maxwidth:960,auto:!1,speed:800,pager:!0,nav:!0,random:!1,pause:!0})}),$(function(){$("#slider-multimedia").responsiveSlides({maxwidth:330,auto:!1,speed:1200,pager:!1,random:!0,pause:!0})});
    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['gimme']->value->template->name=='article.tpl') {?>
      <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('static_file'=>'_js/vendor/galleria/galleria-1.2.9.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
      <link href="<?php echo smarty_function_url(array('static_file'=>'_css/flowplayer_skin/minimalist.css'),$_smarty_tpl);?>
" rel="stylesheet">
      <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('static_file'=>'_js/vendor/flowplayer/flowplayer.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
      $(document).ready(function() {

          $('.rate_widget').each(function(i) {
              var widget = this;
              var out_data = {
                  f_article_number : $(widget).attr('id')
              };
              $.post(
                  '/rating/show',
                  out_data,
                  function(INFO) {
                      $(widget).data( 'fsr', INFO );
                      set_votes(widget);
                  },
                  'json'
              );
          });


          $('.ratings_stars').hover(
              // Handles the mouseover
              function() {
                  $(this).prevAll().andSelf().addClass('ratings_over');
                  $(this).nextAll().removeClass('ratings_vote');
              },
              // Handles the mouseout
              function() {
                  $(this).prevAll().andSelf().removeClass('ratings_over');
                  // can't use 'this' because it wont contain the updated data
                  set_votes($(this).closest('.rate_widget'));
              }
          );


          // This actually records the vote
          $('.ratings_stars').bind('click', function() {
              var star = this;
              var widget = $(this).closest('.rate_widget');
              var score = $(star).attr('class').match(/star_(\d+)/)[1];

              var clicked_data = {
                  f_rating_score : score,
                  f_article_number : widget.attr('id')
              };
              $.post(
                  '/rating/save',
                  clicked_data,
                  function(INFO) {
                      widget.data( 'fsr', INFO );
                      set_votes(widget);
                  },
                  'json'
              );
          });

          var isSlideshow = $('#gallery').is(':visible');

          if (isSlideshow) {
            Galleria.loadTheme('<?php echo smarty_function_url(array('static_file'=>'_js/vendor/galleria/themes/classic/galleria.classic.min.js'),$_smarty_tpl);?>
');
            Galleria.run('#gallery');
            Galleria.ready(function() {
              this.attachKeyboard({
                  right: this.next,
                  left: this.prev
              });
            });
          }
      });

      function set_votes(widget) {
          if ($(widget).data('fsr')) {
              var avg = $(widget).data('fsr').whole_avg;
              var votes = $(widget).data('fsr').number_votes;
              var exact = $(widget).data('fsr').dec_avg;
              var error = $(widget).data('fsr').error;

              $(widget).find('.star_' + avg).prevAll().andSelf().addClass('ratings_vote');
              $(widget).find('.star_' + avg).nextAll().removeClass('ratings_vote');
              $(widget).find('.total_votes').text(votes + ' <?php echo $_smarty_tpl->getConfigVariable('voteS');?>
, <?php echo $_smarty_tpl->getConfigVariable('averageRating');?>
 ' + exact);
              if (error) {
                $(widget).find('.rating_error').addClass('info info-error').text(error);
              }
          }
      }
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="http://connect.facebook.net/en_US/all.js#appId=100924830001723&amp;xfbml=1"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
        (function(d) {
          var po = d.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = 'https://apis.google.com/js/plusone.js';
          var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })(document);
      <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
>
    $(document).ready(function () {

      $('.link-to-top').click(function(e) {
        e.preventDefault();
        $("body, html").animate({
            scrollTop : 0
        }, 800);
      });

      $('.poll-button').click(function(){
        if ($("input[name='f_debateanswer_nr']:checked").length === 0) {
          $('.info-no-answer').show();
          return false;
        }
        $.post($('form[name=debate]').attr("action"),$('form[name=debate]').serialize(),function(data){$('.box-poll').html(data);});
        return false;
      });

    });

    if('querySelector' in document && 'localStorage' in window && 'addEventListener' in window) {
      window.addEventListener("hashchange",function(){var b=document.getElementById(location.hash.substring(1));b&&(/^(?:a|select|input|button|textarea)$/i.test(b.tagName)||(b.tabIndex=-1),b.focus())},!1);
    }
    <?php echo '</script'; ?>
>
    <!--footer lol-->    
    </body>
</html>
<?php }} ?>
