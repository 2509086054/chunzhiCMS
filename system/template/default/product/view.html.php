{if(!defined("RUN_MODE"))} {!die()} {/if}
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}
{!js::set('path', $product->path)}
{!js::set('objectType', 'product')}
{!js::set('productID', $product->id)}
{!js::set('objectID', $product->id)}
{!js::set('categoryID', $category->id)}
{!js::set('categoryPath', explode(',', trim($category->path, ',')))}
{!js::set('addToCartSuccess', $lang->product->addToCartSuccess)}
{!js::set('gotoCart', $lang->product->gotoCart)}
{!js::set('goback', $lang->product->goback)}
{!js::set('stockOpened', $stockOpened)}
{!js::set('stock', $product->amount)}
{!css::internal($product->css)}
{!js::execute($product->js)}
{!js::set('pageLayout', $control->block->getLayoutScope('product_view', $product->id))}
{$common->printPositionBar($category, $product)}
{$control->block->printRegion($layouts, 'product_view', 'topBanner')}

<section class="content-section slider-with-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="nivo-wrapper anim fadeInLeft">
          <div class="nivoSlider">
            <div id="products_slider">
              {if(!empty($product->image->list))}
                {foreach($product->image->list as $image)}
                  {$title = $image->title ? $image->title : $product->name}
                  {!html::lazyloadImage($control->loadModel('file')->printFileURL($image), "title='{{$title}}' alt='{{$product->name}}' ")}
                {/foreach}
              {/if}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <h1 class="anim fadeInDown"><span>{$product->name}</span></h1>
        <p class="anim fadeInRight">
          {$product->desc}
        </p>
        <ul class='fa large'>
          {$attributeHtml = ''}
          {if(!$product->unsaleable)}
            {if($product->negotiate)}
              {$attributeHtml .= "<li id='priceItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->price . "</span>"}
              {$attributeHtml .= "<span class='meta-value'><span class='text-danger text-lg text-latin'>" . $lang->product->negotiate . "</span></li>"}
            {else}
              {if($product->promotion != 0)}
                {if($product->price != 0)}
                  {$attributeHtml .= "<li id='priceItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->price . "</span>"}
                  {$attributeHtml .= "<span class='meta-value'><span class='text-muted text-latin'>" . $config->product->currencySymbol . "</span> <del><strong class='text-latin'>" . $product->price . "</del></strong></span></li>"}
                {/if}
                {$attributeHtml .= "<li id='promotionItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->promotion . "</span>"}
                {$attributeHtml .= "<span class='meta-value'><span class='text-muted text-latin'>" . $config->product->currencySymbol . "</span> <strong class='text-danger text-latin text-lg'>" . $product->promotion . "</strong></span></li>"}
              {elseif($product->price != 0)}
                {$attributeHtml .= "<li id='priceItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->price . "</span>"}
                {$attributeHtml .= "<span class='meta-value'><span class='text-muted text-latin'>" . zget($lang->product->currencySymbols, $config->product->currency, '￥') . "</span> <strong class='text-important text-latin text-lg'>" . $product->price . "</strong></span></li>"}
              {/if}
            {/if}
          {/if}
          {if($product->amount and isset($config->product->stock))}
            {$attributeHtml .= "<li id='amountItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->stock . "</span>"}
            {$attributeHtml .= "<span class='meta-value'>" . $product->amount . " <small>" . $product->unit . "</small></span></li>"}
          {/if}
          {if($product->brand)}
            {$attributeHtml .= "<li id='brandItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->brand . "</span>"}
            {$attributeHtml .= "<span class='meta-value'>" . $product->brand . " <small>" . $product->model . "</small></span></li>"}
          {/if}
          {if(!$product->brand and $product->model)}
            {$attributeHtml .= "<li id='modelItem' class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->model . "</span>"}
            {$attributeHtml .= "<span class='meta-value'>" . $product->model . "</span></li>"}
          {/if}
          {if($product->color)}
            {$attributeHtml .= "<li class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->color . "</span>"}
            {$attributeHtml .= "<span class='meta-value'>" . $product->color . "</span></li>"}
          {/if}
          {if($product->origin)}
            {$attributeHtml .= "<li class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $lang->product->origin . "</span>"}
            {$attributeHtml .= "<span class='meta-value'>" . $product->origin . "</span></li>"}
          {/if}
          {foreach($product->attributes as $attribute)}
            {if(empty($attribute->label) and empty($attribute->value))} {continue} {/if}
            {$attributeHtml .= "<li class='anim fadeInRight' data-wow-delay='.20s'><i class='fa fa-check'></i><span class='meta-name'>" . $attribute->label . "</span>"}
            {if(strpos($attribute->value, 'http://') === 0 or strpos($attribute->value, 'https://') === 0)}
              {$attributeHtml .= "<span class='meta-value'>" . html::a($attribute->value, $attribute->value, "target='_blank'") . "</span></li>"}
            {else}
              {$attributeHtml .= "<span class='meta-value'>" . $attribute->value . "</span></li>"}
            {/if}
          {/foreach}
          {$attributeHtml}
        </ul>
        {if(!$product->unsaleable and $product->mall and !$product->negotiate)}

          <p>
            {!html::a(inlink('redirect', "id={{$product->id}}"), $lang->product->buyNow, "class='btn btn-lg btn-primary anim fadeInRight' data-wow-delay='.45s' target='_blank'")}
          </p>
        {/if}
      </div>
    </div>
  </div>
</section><!-- 商品属性 -->
<section class="content-section anim fadeInDown" data-wow-delay="0.25s">
  <div class="container">
    <h1><i class="fa fa-pencil"></i><span>{$lang->product->content}</span></h1>
    <p></p>
  </div>
</section>
<section class="content-section light" style="margin-bottom: 10px;">
  <div class="container">
    {$product->content}
  </div><!-- .container -->
</section><!-- 商品详情 -->
{* $control->loadModel('file')->printFiles($product->files) *}
{$control->block->printRegion($layouts, 'product_view', 'bottomBanner')}
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
