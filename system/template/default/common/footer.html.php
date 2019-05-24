{if(!defined("RUN_MODE"))} {!die()} {/if}
{!$control->block->printRegion($layouts, 'all', 'bottom', true)}
<footer class="classic">
  <section class="content-section parallax-bg-3" data-stellar-background-ratio=".15">
    <div class="foot-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-3 anim fadeInLeft">
          </div><!-- .col-lg-3 -->

          <div class="col-md-3 anim fadeInLeft">
          </div><!-- .col-lg-3 -->

          <div class="col-md-3">
          </div><!-- .col-lg-3 -->

          <div class="col-md-3 anim fadeInRight">
          </div><!-- .col-lg-3 -->
        </div><!-- .row -->

        <div class="row">
          <div class="col-lg-12">
            <span class="copyright">
              {$copyright=empty($config->site->copyright) ? '' : $config->site->copyright . '-'}
              {$contact=json_decode($config->company->contact)}
              {$company=(empty($contact->site) or $contact->site == $control->server->http_host) ? $config->company->name : html::a('http://' . $contact->site, $config->company->name, "target='_blank'")}
              copyright&copy; &nbsp;&nbsp;{$copyright} {!echo date('Y')} {$company} &nbsp;&nbsp;
            </span>
            <span class="miitbeian">
              {if(!empty($config->site->icpLink) and !empty($config->site->icpSN))}
              {!html::a(strpos($config->site->icpLink, 'http://') !== false ? $config->site->icpLink : 'http://' . $config->site->icpLink, $config->site->icpSN, "target='_blank'")}
              {/if}
              {if(empty($config->site->icpLink) and !empty($config->site->icpSN))}
              {$config->site->icpSN}
              {/if}
              {if(!empty($config->site->policeLink) and !empty($config->site->policeSN))}
              {!html::a(strpos($config->site->policeLink, 'http://') !== false ? $config->site->policeLink : 'http://' . $config->site->policeLink, html::image($webRoot . 'theme/default/default/images/main/police.png'),"target='_blank'")}
              {/if}
            </span>
          </div><!-- .col-lg-12 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .foot-wrapper -->
  </section><!-- .content-section -->

</footer>

{* All JavaScript Loading begin *}

{if($config->debug)}
<!-- All JavaScript -->
{!js::import($themeRoot . 'common/js/jquery-1.11.0.min.js')}
<!-- Easing core JavaScript -->
{!js::import($themeRoot . 'common/js/jquery.easing.1.3.js')}
<!-- Bootstrap core JavaScript -->
{!js::import($themeRoot . 'common/js/bootstrap.min.js')}
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
{else}
{if($cdnRoot)}
{!js::import($cdnRoot . '/js/chanzhi.all.js', $version = false)}
{else}
{!js::import($jsRoot . 'chanzhi.all.js')}
{/if}
{/if}

{* All JavaScript Loading end *}
</body>

</html>