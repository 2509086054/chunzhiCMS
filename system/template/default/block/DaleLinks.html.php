{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
  /*
 * @Description: Dale模板样式的友情链接
 * @Author: Alisa
 * @Date: 2019-05-29 00:15:44
 * @LastEditors: Alisa
 * @LastEditTime: 2019-07-30 16:14:09
 */
*}
{if($app->getModuleName() != 'links' and !empty($config->links->index))}
<div class="col-md-12">
  <!-- links 友情链接 -->
  <h5 class="anim fadeInRight"><i class="fa fa-rocket"></i>{$block->title}
    {if(trim(strip_tags($config->links->all, '<a>')))}
    <span class='pull-right'>
      {!html::a(helper::createLink('links', 'index'), $lang->more,"class = 'icpbeian'")}
    </span>
    {/if}
  </h5>
  <ul class="pages">
  {*$config->links->index*}{*编辑器有问题，HTML总是变化*}
    <li class="anim fadeInRight" data-wow-delay="0.35s"><a class="btn btn-bordered white" role="button" href="#">天猫</a></li>
    <li class="anim fadeInRight" data-wow-delay="0.37s"><a class="btn btn-bordered white" role="button" href="#">京东</a></li>
    <li class="anim fadeInRight" data-wow-delay="0.39s"><a class="btn btn-bordered white" role="button" href="#">拼多多</a></li>

    <li class="anim fadeInRight" data-wow-delay="0.42s"><a class="btn btn-bordered white" role="button" href="#">微信商城</a></li>
    <li class="anim fadeInRight" data-wow-delay="0.45s"><a class="btn btn-bordered white" role="button" href="#">Contact</a></li>
    <li class="anim fadeInRight" data-wow-delay="0.49s"><a class="btn btn-bordered white" role="button" href="#">About</a></li>

    <li class="anim fadeInRight" data-wow-delay="0.51s"><a class="btn btn-bordered white" role="button" href="#">Single Post</a></li>
    <li class="anim fadeInRight" data-wow-delay="0.54s"><a class="btn btn-bordered white" role="button" href="#">Contact</a></li>
  </ul><!-- .pages -->
</div><!-- .col-lg-3 -->
{/if}
