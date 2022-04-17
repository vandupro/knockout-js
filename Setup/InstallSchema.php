<?php
namespace AHT\knockout\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('building'))
            ->addColumn('building_id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'building id')
            ->addColumn('content', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, [], 'content')
            ->setComment('building table');
        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
