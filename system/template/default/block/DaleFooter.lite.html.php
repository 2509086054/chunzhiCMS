{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
 * @Description: 自添加block的第2个测试
 * @Author: Alisa
 * @Date: 2019-05-28 12:20:46
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-30 01:29:09
 */
*}
<footer class="classic">
  <section class="content-section parallax-bg-3" data-stellar-background-ratio=".15">
    <div class="foot-wrapper">
      <div class="container">
        <div class="row">
          {!$control->block->printRegion($layouts, 'all', 'all_bottom_regionRow1')}
          <div class="col-lg-5 anim fadeInRight">
          <!-- qrcode 二维码 -->
          </div><!-- .col-lg-5 -->
        </div><!-- .row -->

        <div class="row">
          {!$control->block->printRegion($layouts, 'all', 'all_bottom_regionRow2')}
        </div><!-- .row -->

        <div class="row">
          <div class="col-lg-12">
            <!-- 运行信息 -->
            {if($config->site->execInfo == 'show')} {$config->execPlaceholder} {/if}
            <!-- 站点地图 -->
            {!html::a(helper::createLink('sitemap', 'index'), '<i class=\'fa fa-sitemap\'></i> ' . $lang->sitemap->common, "class='text-linki'")}
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
