{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/**
* @Description: 导航菜单
* @param : {type}
* @return:
* @Author: Alisa
* @LastEditors: Alisa
* @LastEditTime: Do not edit
* @Date: 2019-05-23 14:31:16
*/
*}
{$template = $model->config->template->{{$device}}->name}
{$theme = $model->config->template->{{$device}}->theme}
{$logoSetting = isset($model->config->site->logo) ? json_decode($model->config->site->logo) : new stdclass()}
{$logo = ''}

{if(isset($logoSetting->$template->themes->all))} {$logo = $logoSetting->$template->themes->all} {/if}
{if(isset($logoSetting->$template->themes->$theme))} {$logo = $logoSetting->$template->themes->$theme} {/if}

{if($logo != '')} {$logo->extension = $model->loadModel('file')->getExtension($logo->pathname)} {/if}
<span id="nav-begins"></span><!-- place before navigation bar-->
<div class="container-wrapper navigation">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
          <i class="fa fa-bars"></i>
        </button>
        <!-- logo -->
        {!html::a(helper::createLink('index'), html::image($model->loadModel('file')->printFileURL($logo)), "class='navbar-brand' alt='{{$config->company->name}}' title='{{$config->company->name}}'")}
        <!-- slogan class未设置
        <div id='siteSlogan' data-ve='slogan'class="navbar-brand" ><span>{$config->site->slogan}</span></div>
       -->
        <ul class="mini"></ul><!-- mobile navigation -->
      </div>
      <!-- .navbar-header -->
      {include $model->loadModel('ui')->getEffectViewFile('default', 'block', 'nav')}
    </div><!-- /.container-fluid -->
    {include $model->loadModel('ui')->getEffectViewFile('default', 'block', 'searchbar')}
  </nav>
</div>