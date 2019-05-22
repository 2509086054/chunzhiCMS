{if(!defined("RUN_MODE"))} {!die()} {/if}
{*php
/**
 * The php code block view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV12 (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
*/
/php*}
<div id="block{!echo $block->id}" class='block'>
{$block->content = is_null(json_decode($block->content)) ? $block->content : json_decode($block->content)}
{if(!is_object($block->content))} {$content = $block->content} {/if}
{if(is_object($block->content))}  {$content = isset($block->content->content) ? $block->content->content : ''} {/if}
{@eval('?'. '>' . htmlspecialchars_decode($content, ENT_QUOTES))}
</div>
