<?php

$this->startSetup();

$setup = new Mage_Sales_Model_Resource_Setup('core_setup');

$setup->addAttribute('order', 'delivery_instructions', array('type'=>'varchar', 'nullable' => true, 'grid' => true));
$setup->addAttribute('quote', 'delivery_instructions', array('type'=>'varchar', 'nullable' => true, 'grid' => true));

$this->endSetup();
