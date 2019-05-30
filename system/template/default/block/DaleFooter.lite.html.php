{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
 * @Description: 自添加block的第2个测试
 * @Author: Alisa
 * @Date: 2019-05-28 12:20:46
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-30 15:48:31
 */
*}
<footer class="classic">
  <section class="content-section parallax-bg-3" data-stellar-background-ratio=".15">
    <div class="foot-wrapper">
      <div class="container">
        <div class="row">
          {!$control->block->printRegion($layouts, 'all', 'all_bottom_regionRow1')}

          <!-- qrcode 二维码 -->
          {include TPL_ROOT . 'common/qrcode.html.php'}

        </div><!-- .row -->

        <div class="row">
          {!$control->block->printRegion($layouts, 'all', 'all_bottom_regionRow2')}
        </div><!-- .row -->

        <div class="row">
        <div class="col-xs-4  anim fadeInLeft ">
        <!-- 站点地图 -->
        {!html::a(helper::createLink('sitemap', 'index'), '<i class=\'fa fa-sitemap\'></i> ' . $lang->sitemap->common, "class='text-linki'")}
        </div>
          <div class="col-xs-6">
            <span class="copyright">
              {$contact=json_decode($config->company->contact)}
              {$company=(empty($contact->site) or $contact->site == $control->server->http_host) ? $config->company->name : html::a('http://' . $contact->site, $config->company->name, "target='_blank'")}
              {$company}
            </span>
            <span class="icpbeian">
              {$copyright=empty($config->site->copyright) ? '' : $config->site->copyright . '-'}
              &copy; &nbsp;&nbsp;{$copyright} {!echo date('Y')} &nbsp;&nbsp;
              {if(!empty($config->site->icpLink) and !empty($config->site->icpSN))}
              {!html::a(strpos($config->site->icpLink, 'http://') !== false ? $config->site->icpLink : 'http://' . $config->site->icpLink, $config->site->icpSN, "target='_blank'")}
              {/if}
              {if(empty($config->site->icpLink) and !empty($config->site->icpSN))}
              {$config->site->icpSN}
              {/if}
              {if(!empty($config->site->policeLink) and !empty($config->site->policeSN))}
              {!html::a(strpos($config->site->policeLink, 'http://') !== false ? $config->site->policeLink : 'http://' . $config->site->policeLink, html::lazyloadImage($webRoot . 'theme/default/default/images/main/police.png'),"target='_blank'")}
              {/if}
            </span>
          </div><!-- .col-xs-6 -->
          <div class="col-xs-2  anim fadeInRight ">
            <!-- 运行信息 -->
            {if($config->site->execInfo == 'show')} {$config->execPlaceholder} {/if}
          </div><!-- .col-xs-2 -->
        </div><!-- .row -->

      </div><!-- .container -->
    </div><!-- .foot-wrapper -->
  </section><!-- .content-section -->

</footer>
