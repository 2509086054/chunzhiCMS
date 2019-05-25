{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
* @Description:
* $method 变量指定具体的查询函数
* 最新和最热产品的区别，仅仅在于order product.ID 或 product.view 字段
* category与product表之间的关系是定义在relation表中
* @Author: Alisa
* @Date: 2019-05-24
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-25 10:34:26
*/
*}
{$content = json_decode($block->content)}
{$type = str_replace('product', '', strtolower($block->type))}
{$method = 'get' . $type}
{if(empty($content->category))} {$content->category = 0} {/if}
{if(empty($content->limit))} {$content->limit = 6} {/if}
{$image = isset($content->image) ? true : false}
{$products = $model->loadModel('product')->$method($content->category, $content->limit, $image)}
<section class="portfolio">
    <div class="gallary">
        <div class="preview">
            <i class="fa fa-spinner fa-spin"></i>
        </div>
        <ul>
        {foreach($products as $product)}
            {$url = helper::createLink('product', 'view', "id=$product->id","category={{$product->category->alias}}&name=$product->alias")}
            {* 图片名称或产品名称 *}
            {$title = $product->image->primary->title ? $product->image->primary->title : $product->name}
            {*
             * 配合/block/producttree.html.php
             * 定义filter class,一个产品可能有多个分类，所有要循环生成所有的class 
             *}
            {$filterClass = ""}
            {foreach($product->categories as $category)}
                {$filterClass .= " category".$category->id}
            {/foreach}
            <li class="{$filterClass}">
                <a href="{$url}" id="desc" data-title="{$product->name}" data-icon="fa-eye">
                {if(!empty($product->image))}
                {!html::image($model->loadModel('file')->printFileURL($product->image->primary, 'middleURL'),"title='{{$title}}' alt='{{$product->name}}'")}
                {else}
                <img src="{$themeRoot . 'common/images/ffffff.png'}" />
                {/if}
                </a>
            </li>
        {/foreach}
        </ul>
        <div class="clearfix"></div>
    </div><!-- gallary -->
</section><!-- portfolio -->