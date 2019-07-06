{if(!defined("RUN_MODE"))} {!die()} {/if}
{*php
/**
 * @Description:
 * @Author: Alisa
 * @Date: 2019-06-02 21:33:34
 */
/php*}
{$themeRoot = $config->webRoot . 'theme/'}

{$content  = json_decode($block->content)}
{$method   = 'get' . ucfirst(str_replace('blog', '', strtolower($block->type)))}
{$articles = $model->loadModel('article')->$method(empty($content->category) ? 0 : $content->category, $content->limit, 'blog')}
{if(isset($content->image))} {$articles = $model->loadModel('file')->processImages($articles, 'blog')} {/if}
      <div class="col-lg-6 sidebar {!echo $blockClass}">
        <h4 class="anim fadeInRight">
        {$block->title}
          <i class="fa fa-comment"></i>
          <span class='pull-right'>
            {!html::a(helper::createLink('blog', 'index'), $lang->more,"class = 'more'")}
          </span>
        </h4>
        <div class="anim fadeInRight">
          <ul id="blogCarousel" class="posts-wrapper">
          {$i = 0}
          {foreach($articles as $article)}
            {$alias = "category={{$article->category->alias}}&name={{$article->alias}}"}
            {$url   = helper::createLink('blog', 'view', "id=$article->id", $alias)}
            {* 截取字符串，只显示16个UTF8字符 *}
            {$title = mb_strlen($article->title,'UTF8')>16 ? mb_substr($article->title,0,16,'UTF8' ) . "<strong>...</strong>" : $article->title}
            {$summary =  mb_strlen($article->summary,'UTF8')>32 ? mb_substr($article->summary,0,32,'UTF8' ) . "<strong>...</strong>" : $article->summary}
            {if($i%3 == 0)} {* owlCarousel li ul 控制 *}
            <li>
              <ul class="posts">
            {/if}
                <li>
                  {* 加载首图 *}
                  {if(!empty($article->image))}
                      {$article->image->primary->objectType = 'article'}
                      {!html::a($url, html::lazyloadImage($model->loadModel('file')->printFileURL($article->image->primary)))}
                      {* , "alt = '$article->title' title='$article->title'" *}
                  {else}
                  <img src="http://placehold.it/90x90/f8c2c5/ffffff" />
                  {/if}
                  <h5 style="line-height: 20px;">
                  {* 原创标签 *}
                  {if($article->source)}<span class='label label-success'>{!echo $lang->article->sourceList[$article->source]}</span>{/if}
                  {* 置顶操作标签，加粗选项未使用 *}
                  {if($article->sticky && (!formatTime($article->stickTime) || $article->stickTime > date('Y-m-d H:i:s')))} <span class='red'><i class="fa fa-arrow-up"></i></span>{/if}
                  {* 博客标题 *}
                  {!html::a($url, $title, "title='{{$article->title}}'")}

                  </h5>
                  <h6>
                  {$summary}
                  </h6>
                  <cite>
                    {* 显示categoryName *}
                    {if(isset($content->showCategory) and $content->showCategory == 1)}
                      {* 显示category别名 *}
                      {$categoryName = $article->category->name}
                      {if($content->categoryName == 'abbr')}
                        {$categoryName = ($article->category->abbr ? $article->category->abbr : $article->category->name)}
                      {/if}
                      <i class="fa fa-bookmark"></i>
                      {!html::a(helper::createLink('blog', 'index', "categoryID={{$article->category->id}}", "category={{$article->category->alias}}"),  $categoryName )}
                    {/if}

                    {* 显示时间 *}
                    {if(isset($content->time))}
                    <i class="fa fa-clock-o"></i>{!echo "<strong>" . formatTime($article->addedDate, DT_DATE4) . "</strong>"}
                    {/if}

                    {* 阅读量 *}
                    <i class='fa fa-eye'></i> {!printf($lang->article->lblViews, "<strong>" . $article->views . "</strong>")}
                  </cite>
                  <div class="clearfix"></div>
                </li>
                {$i = $i +1}
            {if($i%3 == 0)} {* owlCarousel li ul 控制 *}
              </ul><!-- .posts -->
            </li>
            {/if}
            {/foreach}
            {if($i%3 != 0)} {* owlCarousel li ul 最后补齐 *}
              </ul><!-- .posts -->
            </li>
            {/if}
          </ul><!-- .posts-wrapper -->
        </div>
      </div><!-- .col-lg-6 .sidebar -->