{if(!defined("RUN_MODE"))} {!die()} {/if}
{if(isset($config->wechatPublic->hasPublic) and $config->wechatPublic->hasPublic)}
{$publicList=$control->loadModel('wechat')->getList()}
{/if}
{$qrcode = zget($config->ui, 'QRCode', '0')}

{if(!empty($publicList) or (extension_loaded('gd') && $qrcode))}
  <!-- qrcode 二维码 -->
<div class="col-md-4 anim fadeInRight">
  <h5><i class="fa fa-qrcode"></i>{$lang->qrcodeTip}</h5>
  <span class = "pull-left">
  {if(isset($publicList))}
      {foreach($publicList as $public)}
        {if(!$public->qrcode)} {continue} {/if}
          <p><i class='icon-weixin'>&nbsp;</i> {$public->name}</p>
          {!html::lazyloadImage("{{$public->qrcode}}"," title='{{$public->name}}' alt='{{$public->name}}' width='150' height='150'")}
      {/foreach}
    {/if}
    </span>
    <span class = "pull-right">
    <p><i class='icon-weixin'>&nbsp;</i> {$public->name}</p>
    {if(extension_loaded('gd') && $qrcode)}
        {!html::lazyloadImage(helper::createLink('misc', 'qrcode')," title='{{$public->name}}' alt='{{$public->name}}' width='150' height='150'")}
    {/if}
    </span>
</div><!-- .col-md-4 -->
{/if}
