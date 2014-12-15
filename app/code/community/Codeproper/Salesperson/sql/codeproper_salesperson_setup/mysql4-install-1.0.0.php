<?php
$installer = $this;

$installer->startSetup();

$idAttr  = array(
    'type'                          => Varien_Db_Ddl_Table::TYPE_VARCHAR,
    'visible'                       => false,
    'required'                      => false,
    'label'                         => 'Salesperson ID'
);

$nameAttr  = array(
    'type'                          => Varien_Db_Ddl_Table::TYPE_VARCHAR,
    'visible'                       => false,
    'required'                      => false,
    'label'                         => 'Salesperson Name'
);

$installer->addAttribute('order', 'salesperson_id', $idAttr);
$installer->addAttribute('order', 'salesperson_name', $nameAttr);

$installer->endSetup();
