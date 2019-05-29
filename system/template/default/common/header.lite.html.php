{if(!defined("RUN_MODE"))} {!die()} {/if}
{$sysURL=rtrim($sysURL, '/')}
{if(isset($mobileURL))} {$mobileURL=ltrim($mobileURL, '/')} {/if}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://www.w3.org/2005/10/profile">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  {if(isset($mobileURL))}
    <link rel="alternate" media="only screen and (max-width: 640px)" href="{$sysURL}/{$mobileURL}">
  {/if}

  {if(isset($sourceURL))}
    <link rel="canonical" href="{$sysURL}/{$sourceURL}" >
  {else}
    {if(isset($canonicalURL))} <link rel="canonical" href="{$sysURL}/{$canonicalURL}" > {/if}
  {/if}
  {if($thisModuleName == 'user' and $thisMethodName == 'deny')} <meta http-equiv='refresh' content="5;url={!helper::createLink('index')}"> {/if}

  {if(!isset($title))}   {$title    = ''} {/if}
  {if(!empty($title))}   {$title   .= $lang->minus} {/if}
  {if(empty($keywords))} {$keywords = $config->site->keywords} {/if}
  {if(empty($desc))}     {$desc     = $config->site->desc} {/if}

  {!html::title($title . $config->site->name)}
  {!html::meta('keywords', $keywords)}
  {!html::meta('description', $desc)}
  {if(isset($config->site->meta))}{$config->site->meta}{/if}

  {if($config->debug)}<!-- config.debug -->
    <!-- Bootstrap core CSS -->
    {!css::import($themeRoot . 'common/css/bootstrap.3.1.css')}
      <!-- Primary CSS styles -->
    {!css::import($themeRoot . 'common/css/style.css')}
      <!-- Masterslider CSS styles -->
    {!css::import($themeRoot . 'common/css/masterslider/masterslider.css')}
    {!css::import($themeRoot . 'common/css/masterslider/skins/black-1/style.css')}
      <!-- Fontawesome CSS styles -->
    {!css::import($themeRoot . 'common/css/font-awesome.4.7.0.min.css')}
      <!-- Aniamte CSS styles -->
    {!css::import($themeRoot . 'common/css/animate.css')}
      <!-- Nivo Slider CSS Styles -->
    {!css::import($themeRoot . 'common/css/nivo-slider.css')}
      <!-- Isotope CSS Styles -->
    {!css::import($themeRoot . 'common/css/isotope.css')}
      <!-- Owl Carousel CSS Styles -->
    {!css::import($themeRoot . 'common/css/owl.carousel.css')}
    {!css::import($themeRoot . 'common/css/owl.transitions.css')}
      <!-- Lightbox CSS Styles -->
    {!css::import($themeRoot . 'common/css/lightbox.css')}
  {else}
    {if($cdnRoot)}
      {!css::import($cdnRoot . '/theme/default/default/chanzhi.all.css', '', $version = false)}
    {else}
      {!css::import($themeRoot . 'default/chanzhi.all.css')}
    {/if}
  {/if}

  {!js::exportConfigVars()}
  {!js::set('theme', array('template' => CHANZHI_TEMPLATE, 'theme' => CHANZHI_THEME, 'device' => $app->clientDevice))}
  {!html::icon($favicon)}
  {!html::rss(helper::createLink('rss', 'index', '', '', 'xml'), $config->site->name)}

  {$control->block->printRegion($layouts, 'all', 'header')}
</head>
<body>
