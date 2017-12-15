<?php

namespace OuterEdge\Deliveryinstructions\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'delivery_instructions',
            [
                'type' => 'text',
                'nullable' => false,
                'comment' => 'Delivery Instructions',
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'delivery_instructions',
            [
                'type' => 'text',
                'nullable' => false,
                'comment' => 'Delivery Instructions',
            ]
        );
        $setup->endSetup();
    }
}