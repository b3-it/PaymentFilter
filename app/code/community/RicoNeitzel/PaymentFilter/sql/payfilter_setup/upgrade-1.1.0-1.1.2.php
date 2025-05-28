<?php
/* @var $this Mage_Eav_Model_Entity_Setup */
$this->startSetup();

$this->updateAttribute('catalog_product','product_payment_methods', 'backend_type', 'text');


$this->endSetup();