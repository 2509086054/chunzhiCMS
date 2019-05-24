{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/**
 * @Description: 
 * @param : {type}
 * @return: 
 * @Author: Alisa
 * @LastEditors: Alisa
 * @LastEditTime: Do not edit
 * @Date: 2019-05-24 14:53:06
 */
*}
{$block->content = is_null(json_decode($block->content)) ? $block->content : json_decode($block->content)}

{if(!is_object($block->content))} {$blockContent = $block->content} {/if}
{if(is_object($block->content))}  {$blockContent = isset($block->content->content) ? $block->content->content : ''} {/if}

{!str_ireplace('#blockID', "#block{{$block->id}}", $blockContent)}

