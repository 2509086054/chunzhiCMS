{if(!defined("RUN_MODE"))} {!die()} {/if}
{* !$control->block->printRegion($layouts, 'all', 'bottom') *}
{include $control->loadModel('ui')->getEffectViewFile('default', 'block', 'DaleFooter.lite')}

{* All JavaScript Loading begin *}
{if($config->debug)}
<!-- All JavaScript -->
{!js::import($themeRoot . 'common/js/jquery-1.11.0.min.js')}
<!-- Easing core JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.easing.1.3.js')}
<!-- Bootstrap core JavaScript -->
{!js::import($themeRoot . 'common/js/popper.min.js')}
{!js::import($themeRoot . 'common/js/bootstrap.min.3.1.js')}
<!-- Master slider core JavaScript -->
{!js::import($themeRoot . 'common/js/masterslider.min.js')}
<!-- Master slider staff core JavaScript -->
{!js::import($themeRoot . 'common/js/masterslider.staff.carousel.dev.js')}
<!-- WOW core JavaScript -->
{!js::import($themeRoot . 'common/js/wow.min.js')}
<!-- Waypoints core JavaScript -->
{!js::import($themeRoot . 'common/js/waypoints.min.js')}
<!-- Underscore core JavaScript -->
{!js::import($themeRoot . 'common/js/underscore-min.js')}
<!-- jQuery Backstretch core -->
{!js::import($themeRoot . 'common/js/jquery.backstretch.min.js')}
<!-- jQuery color core JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.animation.js')}
<!-- Isotope core JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.isotope.min.js')}
<!-- Stellar core JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.stellar.min.js')}
<!-- Contact core JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.contact.min.js')}
<!-- NiceScroll core Javascript -->
{!js::import($themeRoot . 'common/js/jquery.nicescroll.min.js')}
<!-- Retina core JavaScript -->
{*!js::import($themeRoot . 'common/js/retina-1.1.0.min.js')*}
<!-- Nivo Slider JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.nivo.slider.pack.js')}
<!-- Video core JavaScript -->
{!js::import($themeRoot . 'common/js/video.js')}
<!-- OWL Carousel core JavaScript -->
{!js::import($themeRoot . 'common/js/owl.carousel.min.js')}
<!-- Lightbox core JavaScript -->
{!js::import($themeRoot . 'common/js/lightbox.min.js')}
<!-- Everything else -->
{!js::import($themeRoot . 'common/js/custom.js')}
<!-- chanzhi JavaScript-->
{!js::import($jsRoot . 'chanzhi.js')}
{else}
{if($cdnRoot)}
{!js::import($cdnRoot . '/js/chanzhi.all.js', $version = false)}
{else}
{!js::import($jsRoot . 'chanzhi.all.js')}
{/if}
{/if}

{* All JavaScript Loading end *}
{include TPL_ROOT . 'common/log.html.php'}
</body>

</html>