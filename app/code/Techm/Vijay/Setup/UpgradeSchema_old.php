<?php
namespace Techm\Vijay\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $installer = $setup;

        $installer->startSetup();
        if(version_compare($context->getVersion(), '1.0.1', '<')) {
            $installer->startSetup();
            if (!$installer->tableExists('feedback_form')) {
                $table = $installer->getConnection()->newTable(
                    $installer->getTable('feedback_form')
                )
                    ->addColumn(
                        'id',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        null,
                        ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                        'id'
                    )->addColumn(
                        'name',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Name'
                    )->addColumn(
                        'email',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Email'

                    )->addColumn(
                        'telephone',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Telephone'
                    )->addColumn(
                        'message',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        [],
                        'Message'
                    )
                ;
                $installer->getConnection()->createTable($table);
            }
        }

        $installer->endSetup();
    }
}