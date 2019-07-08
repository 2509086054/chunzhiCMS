{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/**
 * @Description: 系统幻灯片
 * @param : {type}
 * @return:
 * @Author: Alisa
 * @LastEditors: Alisa
 * @LastEditTime: Do not edit
 * @Date: 2019-06-21 17:17:10
 */
*}
{$block->content = json_decode($block->content)}
{$groupID        = !empty($block->content->group) ? $block->content->group : ''}
{$slides         = $model->loadModel('slide')->getList($groupID)}
{$slideID        = 'slide' . $block->id . '-' . $groupID}
{$group          = $model->loadModel('tree')->getByID($groupID)}
{$globalButtons  = zget($group, 'desc', '') ? json_decode($group->desc, true) : array()}
{$slideStyle     = !empty($block->content->style) ? $block->content->style : 'carousel'}
{if($slides)}
<section class="portfolio low-rider">
  <div class = "no-container">
    <div id='myCarousel' class="carousel slide" data-ride='carousel'>
      <div class='carousel-inner'>
      {$height = 0; $index = 0}
      {foreach($slides as $slide)}
        {$url    = empty($slide->mainLink) ? '' : " data-url='" . $slide->mainLink . "'"}
        {$target = " data-target='" . ($slide->target ? '_blank' : '_self') . "'"}
        {if($height == 0 and $slide->height)} {$height = $slide->height} {/if}
        {$itemClass = 0 === $index++ ? 'item active' : 'item'}
        {if($slide->backgroundType == 'image')}
          <div data-id='{!echo $slide->id}' class='{!echo $itemClass }'{!echo $url . ' ' . $target}>
          {!print(html::lazyloadImage($slide->image,"alt='{{$slide->title}}' title='{{$slide->title}}'"))}
        {else}
          <div data-id='{!echo $slide->id}' class='{!echo $itemClass }'{!echo $url . ' ' . $target} style='{!echo 'background-color: ' . $slide->backgroundColor . '; height: ' . $height . 'px'}'>
        {/if}
          <div class="{!echo $slideStyle . '-caption'}">
            <h2 style='color:{!echo $slide->titleColor}'>{!echo $slide->title}</h2>
            <div>{!echo $slide->summary}</div>
            {foreach($globalButtons as $id => $globalButton)}
              {foreach($globalButton as $key => $global)}
                {if(!$global)} {continue} {/if}
                {if(trim($slides[$id]->label[$key]) != '')}
                  {if($slides[$id]->buttonUrl[$key])}  {!html::a($slides[$id]->buttonUrl[$key], $slides[$id]->label[$key], "class='btn btn-lg btn-{{$slides[$id]->buttonClass[$key]}}' target='{{$slides[$id]->buttonTarget[$key]}}'")} {/if}
                  {if(!$slides[$id]->buttonUrl[$key])} {!html::commonButton($slides[$id]->label[$key], "btn btn-lg btn-{{$slides[$id]->buttonClass[$key]}}")} {/if}
                {/if}
              {/foreach}
            {/foreach}

            {foreach($slide->label as $key => $label)}
              {if(!empty($globalButtons[$slide->id][$key]))} {continue} {/if}
              {if(trim($label) != '')}
                {if($slide->buttonUrl[$key])} {!html::a($slide->buttonUrl[$key], $label, "class='btn btn-lg btn-{{$slide->buttonClass[$key]}}' target='{{$slide->buttonTarget[$key]}}'")} {/if}
                {if(!$slide->buttonUrl[$key])} {!html::commonButton($label, "btn btn-lg btn-{{$slide->buttonClass[$key]}}")} {/if}
              {/if}
            {/foreach}
          </div>
        </div>
      {/foreach}
      {if($slideStyle == 'carousel')}
        {if(count($slides) > 1)}
        <div class="directionNav">
          <a class="prevNav" >
            <i class="fa fa-chevron-left"></i>
          </a>
          <a class="nextNav" >
            <i class="fa fa-chevron-right"></i>
          </a>
        </div><!--directionNav-->
        {/if}
      {/if}
      </div><!--carousel-inner-->
    </div><!--carousel slide -->
  </div><!-- .container -->
</section>
{/if}
