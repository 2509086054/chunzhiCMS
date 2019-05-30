{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
 * @Description: 自添加block的首个测试
 * @Author: Alisa
 * @Date: 2019-05-28 12:20:46
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-30 15:49:07
 */
*}
{*/php*}
<div class="col-md-4 anim fadeInLeft">
    <!-- about 公司简介 -->
    <span class="logo">
        {* logo 已经在block\header 中赋值，不用重复取值 *}
        {!html::lazyloadImage($model->loadModel('file')->printFileURL($logo),"alt='{{$config->company->name}}' title='{{$config->company->name}}'")}
    </span><!-- .logo -->
    <p>
        {!echo $config->company->desc}
    </p>
</div><!-- .col-md-4 -->