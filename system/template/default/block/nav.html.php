{if(!defined("RUN_MODE"))} {!die()} {/if}
{$topNavs = $model->loadModel('nav')->getNavs('desktop_top')}
{$navCount = count($topNavs)}
{$i =0}
<div class="collapse navbar-collapse">
  <div class="right">
    <ul class="nav navbar-nav">
    <!-- 一级菜单 -->
    {foreach($topNavs as $nav1)}
      {if(empty($nav1->children))}
      <li class="{if($i == 0)} active {/if}">{!html::a($nav1->url, $nav1->title, "target='$nav1->target'")}</li>
      {else}
      <li class="{if($i == 0)} active {/if} dropdown h">
        {*!html::a('#', $nav1->title, '')*}
        {!html::a($nav1->url, $nav1->title, "target='$nav1->target'")}
        <ul class="dropdown-menu">
        <!-- 二级菜单 -->
        {foreach($nav1->children as $nav2)}
          <li>{!html::a($nav2->url, $nav2->title, "target='$nav2->target'")}</li>
        {/foreach}<!-- end nav2 -->
        </ul>
      </li>
      {/if}
      {$i += 1}
      {/foreach}<!-- end nav1 -->
    </ul>
    <div class="navbar-form navbar-left">
      <i class="fa fa-times"></i>
      <i class="fa fa-search"></i>
    </div>
  </div>
</div><!-- /.navbar-collapse -->
