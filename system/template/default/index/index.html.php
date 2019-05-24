{if(!defined("RUN_MODE"))} {!die()} {/if}
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}

{$control->block->printRegion($layouts, 'index_index', 'top', true)}
{$control->block->printRegion($layouts, 'index_index', 'middle', true)}
{$control->block->printRegion($layouts, 'index_index', 'bottom', true)}

{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
