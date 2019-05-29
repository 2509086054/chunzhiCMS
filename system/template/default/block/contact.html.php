{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
 * @Description: file content
 * @Author: Alisa
 * @Date: 2019-05-25 20:37:25
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-29 11:30:23
 */
*}
{$block->content = json_decode($block->content)}
{$contact = $model->loadModel('company')->getContact()}
<div class="col-lg-5">
  <!-- contact 联系我们 -->
  <h5><i class="fa fa-rss"></i>{!echo $icon . $block->title}</h5>
  <div class="contact-info">
    {if(!empty($block->content->moreText) and !empty($block->content->moreUrl))}
      <p>
      {!html::a($block->content->moreUrl, $block->content->moreText)}
      </p>
    {/if}
    {foreach($contact as $item => $value)}
    <span>
      <i class="fa fa-{!echo $item}"></i>
      {!echo $lang->company->$item . $lang->colon . $value}
    </span>
    {/foreach}
  </div>
</div><!-- .col-lg-5 -->