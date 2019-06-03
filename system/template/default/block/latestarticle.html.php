{if(!defined("RUN_MODE"))} {!die()} {/if}
{*php
/**
 * @Description:
 * @param : {type}
 * @return:
 * @Author: Alisa
 * @LastEditors: Alisa
 * @LastEditTime: Do not edit
 * @Date: 2019-06-03 08:23:34
 */
/php*}
{$themeRoot = $model->config->webRoot . 'theme/'}

{$content  = json_decode($block->content)}
{$method   = 'get' . ucfirst(str_replace('article', '', strtolower($block->type)))}
{$articles = $model->loadModel('article')->$method(empty($content->category) ? 0 : $content->category, !empty($content->limit) ? $content->limit : 6)}
{if(isset($content->image))} {$articles = $model->loadModel('file')->processImages($articles, 'article')} {/if}


      <div class="col-lg-6 sidebar {!echo $blockClass}">
        <h4 class="anim fadeInRight">
        {$block->title}
          <i class="fa fa-quote-right"></i>
          <span class='pull-right'>
            {!html::a(helper::createLink('case', 'index'), $lang->more,"class = 'more'")}
          </span>
        </h4>

        <div class="testimonials anim fadeInRight">
          <div class="testimonial-wrapper" id="testowlCarousel">
          {foreach($articles as $article)}
            {$alias = "category={{$article->category->alias}}&name={{$article->alias}}"}
            {$url   = helper::createLink('blog', 'view', "id=$article->id", $alias)}
            {* 截取字符串，只显示16个UTF8字符 *}
            {$title = mb_strlen($article->title,'UTF8')>16 ? mb_substr($article->title,0,16,'UTF8' ) . "<strong>...</strong>" : $article->title}
            {$summary =  mb_strlen($article->summary,'UTF8')>128 ? mb_substr($article->summary,0,128,'UTF8' ) . "<strong>...</strong>" : $article->summary}

            <div>
                <p>
                {!html::a($url, $summary)}
                </p>
                {* 加载首图 *}
                {if(!empty($article->image))}
                    {$article->image->primary->objectType = 'article'}
                    {!html::lazyloadImage($model->loadModel('file')->printFileURL($article->image->primary))}
                    {* , "alt = '$article->title' title='$title'" *}
                {else}
                <img src="http://placehold.it/90x90/f8c2c5/ffffff" />
                {/if}
            </div>

          {/foreach}
          </div><!-- id="testimonials" -->

        </div><!-- .testimonials -->

      </div><!-- .col-lg-6 .sidebar -->
