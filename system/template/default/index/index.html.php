{if(!defined("RUN_MODE"))} {!die()} {/if}
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}

{$control->block->printRegion($layouts, 'index_index', 'top')}
{$control->block->printRegion($layouts, 'index_index', 'middle')}
{*$control->block->printRegion($layouts, 'index_index', 'bottom')*}
{include $control->loadModel('ui')->getEffectViewFile('default', 'block', 'indexBottom.lite')}

{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
