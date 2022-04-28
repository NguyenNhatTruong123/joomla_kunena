<?php
/**
 * @package Sj News Ajax Tabs
 * @version 3.1.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2012 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 *
 */

defined('_JEXEC') or die;
NewsAjaxtabsImageHelper::setDefault($params);

/*------------------*/
$count_item	= count($category_items);
$nb_column0 = $params->get('nb-column0', 6);
$nb_column1 = $params->get('nb-column1', 4);
$nb_column2 = $params->get('nb-column2', 3);
$nb_column3 = $params->get('nb-column3', 2);
$nb_column4 = $params->get('nb-column4', 1);
$btn_prev = '&#171;';
$btn_next = '&#187;';
$nb_rows = $params->get('nb_rows');
$items_style = $params->get('theme');
$class_suffix = $params->get('moduleclass_sfx');
$effect = $params->get('effect');
$delay = (int)$params->get('delay') ? (int)$params->get('delay') : '300';
$duration = (int)$params->get('duration') ? (int)$params->get('duration') : '600';
$nav = $params->get('navs') == 1 ? "true" : "false";
$dots = $params->get('dots') == 1 ? "true" : "false";
$margin = (int)$params->get('margin') ? (int)$params->get('margin') : '0';
$slideBy = (int)$params->get('slideBy') ? (int)$params->get('slideBy') : '1';
$autoplay_timeout = (int)$params->get('autoplay_timeout') ? (int)$params->get('autoplay_timeout') : '5000';
$autoplay_speed = (int)$params->get('autoplay_speed') ? (int)$params->get('autoplay_speed') : '2000';
$startPosition = (int)$params->get('startPosition') ? (int)$params->get('startPosition') : '0';
$dotsSpeed = (int)$params->get('dotsSpeed') ? (int)$params->get('dotsSpeed') : '500';
$navSpeed = (int)$params->get('navSpeed') ? (int)$params->get('navSpeed') : '500';
$i = 0;

if ($count_item>0){
	$item_container	= 'items_container_'.$module->id;
	?>
	<div class="items-container slide" id="<?php echo $item_container; ?>" data-interval="0" >
		<div class="items-container-inner" >
			<?php foreach ($category_items as $key=> $item) {
				$i++; $classCurr = ($i==1)?' active':''; ?>
			<div class="items-inner">
				<?php if ($i % $nb_rows == 1 || $nb_rows == 1) { ?>
				<div class="items-grid <?php echo $classCurr?>  item " >
				<?php } ?>
					<?php include JModuleHelper::getLayoutPath($module->module, $layout.'_item');	?>
				<?php if ($i % $nb_rows == 0 || $i == $count_item) { ?>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>

<?php
} else {?>
	<div class="noitem"><?php echo JText::_('Has no content to show!'); ?></div>
<?php }?>

<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function ($) {
		;(function (element) {
			var element = "#"+$('.<?php echo $cls_module;?>').attr('id');
			var $element = $(element),
				$extraslider = $(".items-container-inner", $element),
				_delay = <?php echo $delay; ?>,
				_duration = <?php echo $duration; ?>,
				_effect = '<?php echo $effect; ?>';

			$extraslider.on("initialized.owl.carousel", function () {
				var $item_active = $(".owl-item.active", $element);
				if ($item_active.length > 1 && _effect != "none") {
					_getAnimate($item_active);
				}
				else {
					var $item = $(".owl-item", $element);
					$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
				}
				<?php if($params->get('dots') == "true") { ?>
				if ($(".owl-dot", $element).length < 2) {
					$(".owl-prev", $element).css("display", "none");
					$(".owl-next", $element).css("display", "none");
					$(".owl-dot", $element).css("display", "none");
				}
				<?php }?>

				var $tabc_active = $('.tab-content',$element).filter('.selected',$element);
				$(".owl-dots", $tabc_active).insertAfter($(".owl-prev", $tabc_active));
			});

			var total_item = <?php echo round($count_item/$nb_rows) ?>;
			$extraslider.owlCarousel2({
				margin: <?php echo $margin; ?>,
				slideBy: <?php echo $slideBy; ?>,
				autoplay: <?php echo $params->get('autoplay'); ?>,
				autoplayHoverPause: <?php echo $params->get('pausehover'); ?>,
				autoplayTimeout: <?php echo $autoplay_timeout; ?>,
				autoplaySpeed: <?php echo $autoplay_speed; ?>,
				startPosition: <?php echo $startPosition; ?>,
				mouseDrag: <?php echo $params->get('mousedrag');?>,
				autoWidth: false,
				responsive: {
					0: 	{
						items: <?php echo $nb_column4;?>,
						nav: total_item <= <?php echo $nb_column4;?> ? false : ((<?php echo $nav ; ?>) ? true: false)
					} ,
					480: {
						items: <?php echo $nb_column3;?>,
						nav: total_item <= <?php echo $nb_column3;?> ? false : ((<?php echo $nav ; ?>) ? true: false)
					},
					768: { items: <?php echo $nb_column2;?>,
						nav: total_item <= <?php echo $nb_column2;?> ? false : ((<?php echo $nav ; ?>) ? true: false)
					},
					992: { items: <?php echo $nb_column1;?>,
						nav: total_item <= <?php echo $nb_column1;?> ? false : ((<?php echo $nav ; ?>) ? true: false)
					},
					1200: {items: <?php echo $nb_column0;?>,
						nav: total_item <= <?php echo $nb_column0;?> ? false : ((<?php echo $nav ; ?>) ? true: false)
					}
				},
				dotClass: "owl-dot",
				dotsClass: "owl-dots",
				dots: <?php echo $dots; ?>,
				dotsSpeed:<?php echo $dotsSpeed; ?>,
				nav: <?php echo $nav; ?>,
				loop: true,
				navSpeed: <?php echo $navSpeed; ?>,
				navText: ["<?php echo $btn_prev; ?>", "<?php echo $btn_next; ?>"],
				navClass: ["owl-prev", "owl-next"]
			});
			// page
			$extraslider.on('resize.owl.carousel resized.owl.carousel',function(){
				resizePage();
			});
			function resizePage(){
				var tabs_active = $('.tab-content',$element).filter('.selected',$element);
				var this_dots = tabs_active.find('.owl-dot', $element);
				var this_dot = this_dots.length;
				for(var k = 0; k < this_dot; k++ ){
					$($element).find(this_dots[k], $element).find('span').html('').append(k+1);
				}
			}
			resizePage();
			// end page
			$extraslider.on("translate.owl.carousel", function (e) {
				<?php if($params->get('dots') == "true") { ?>
				if ($(".owl-dot", $element).length < 2) {
					$(".owl-prev", $element).css("display", "none");
					$(".owl-next", $element).css("display", "none");
					$(".owl-dot", $element).css("display", "none");
				}
				<?php } ?>

				var $item_active = $(".owl-item.active", $element);
				_UngetAnimate($item_active);
				_getAnimate($item_active);
			});
			$extraslider.on("translated.owl.carousel", function (e) {

				<?php if($params->get('dots') == "true") { ?>
				if ($(".owl-dot", $element).length < 2) {
					$(".owl-prev", $element).css("display", "none");
					$(".owl-next", $element).css("display", "none");
					$(".owl-dot", $element).css("display", "none");
				}
				<?php } ?>

				var $item_active = $(".owl-item.active", $element);
				var $item = $(".owl-item", $element);

				_UngetAnimate($item);

				if ($item_active.length > 1 && _effect != "none") {
					_getAnimate($item_active);
				} else {

					$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
				}
			});

//			this_dots = $element.find('.owl-controls');

			function _getAnimate($el) {
				if (_effect == "none") return;
				//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
				$extraslider.removeClass("extra-animate");
				$el.each(function (i) {
					var $_el = $(this);
					$(this).css({
						"-webkit-animation": _effect + " " + _duration + "ms ease both",
						"-moz-animation": _effect + " " + _duration + "ms ease both",
						"-o-animation": _effect + " " + _duration + "ms ease both",
						"animation": _effect + " " + _duration + "ms ease both",
						"-webkit-animation-delay": +i * _delay + "ms",
						"-moz-animation-delay": +i * _delay + "ms",
						"-o-animation-delay": +i * _delay + "ms",
						"animation-delay": +i * _delay + "ms",
						"opacity": 1
					}).animate({
						opacity: 1
					});
					if (i == $el.size() - 1) {
						$extraslider.addClass("extra-animate");
					}
				});
			}

			function _UngetAnimate($el) {
				$el.each(function (i) {
					$(this).css({
						"animation": "",
						"-webkit-animation": "",
						"-moz-animation": "",
						"-o-animation": "",
						"opacity": 0
					});
				});
			}

		})("#"+$('.<?php echo $cls_module;?>').attr('id'));
	});
	//]]>
</script>