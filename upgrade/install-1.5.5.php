<?php

if (!defined('_PS_VERSION_'))
  exit;

function upgrade_module_1_5_5($object)
{
  return Db::getInstance()->insert('configuration', array('name' => 'PS_BLOCK_BESTSELLERS_TO_DISPLAY', 'value' => 10));
}
