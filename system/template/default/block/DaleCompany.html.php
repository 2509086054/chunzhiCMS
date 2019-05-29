{if(!defined("RUN_MODE"))} {!die()} {/if}
{*
/*
 * @Description: 自添加block的首个测试
 * @Author: Alisa
 * @Date: 2019-05-28 12:20:46
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-29 02:29:52
 */
*}
{*/php*}
<div class="col-lg-5 anim fadeInLeft">
    <!-- about 公司简介 -->
    <span class="logo">
        {* logo 已经在block\header 中赋值，不用重复取值 *}
        {!html::image($model->loadModel('file')->printFileURL($logo),"alt='{{$config->company->name}}' title='{{$config->company->name}}'")}
    </span><!-- .logo -->
    <p>
        {!echo $config->company->desc}
    </p>
</div><!-- .col-lg-5 -->