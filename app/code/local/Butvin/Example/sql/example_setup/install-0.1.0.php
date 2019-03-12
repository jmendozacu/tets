<?php

$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
->newTable($installer->getTable('example'))
->addColumn(
'example_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null,
    [
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ],
    'Id')
->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, ['nullable'  => false,], 'Title')
->addColumn('date', Varien_Db_Ddl_Table::TYPE_DATETIME, null, ['nullable'  => false,], 'Date');
$installer->getConnection()->createTable($table);
$installer->endSetup();