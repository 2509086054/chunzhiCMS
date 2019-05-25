{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
* @Description:
* 产品分类区块，按钮形式，带分类功能
* @Author: Alisa
* @Date: 2019-05-24
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-24 21:03:33
*/
*}
{$block->content = json_decode($block->content)}
{$type = str_replace('tree', '', strtolower($block->type))}
{$browseLink = $type == 'article' ? 'createBrowseLink' : 'create' . ucfirst($type) . 'BrowseLink'}
{$startCategory = 0}
{if(isset($block->content->fromCurrent) and $block->content->fromCurrent)}
{if($type == 'product' and $app->getModuleName() == 'product' and $model->session->productCategory)}
{$category = $model->loadModel('tree')->getByID($model->session->productCategory)}
{$startCategory = $category->parent}
{/if}
{/if}

<section class="portfolio">
  <div class="container">
    <div class="filter anim fadeInDown" data-wow-delay="0.55s">
      <ul id="filters">
        <li><a class="btn btn-bordered hot btn-sm" role="button" data-filter="*">All</a></li>
        {*获取产品一级分类，忽略所有区块配置项*}
        {$topCategories = $model->loadModel('tree')->getChildren($startCategory, $type)}
        {foreach($topCategories as $topCategory)}
        <li><a class="btn btn-bordered btn-sm" role="button"
            data-filter=".category{$topCategory->id}">{$topCategory->name}</a></li>
        {/foreach}
      </ul>
    </div><!-- Standard button -->
  </div><!-- container -->
</section><!-- portfolio 产品分类区块 end-->
