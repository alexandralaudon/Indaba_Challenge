<?php

namespace Indaba\FeaturedCategories\Setup;
use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Catalog\Setup\CategorySetupFactory;

class InstallData implements InstallDataInterface
{
    /**
     * Category setup factory
     *
     * @var CategorySetupFactory
     */
    private $categorySetupFactory;

    /**
     * Init
     *
     * @param CategorySetupFactory $categorySetupFactory
     */
    public function __construct(CategorySetupFactory $categorySetupFactory)
    {
        $this->categorySetupFactory = $categorySetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
         $installer->startSetup();

        $categorySetup = $this->categorySetupFactory->create(['setup' => $setup]);
        $entityTypeId = $categorySetup->getEntityTypeId(\Magento\Catalog\Model\Category::ENTITY);
        $attributeSetId = $categorySetup->getDefaultAttributeSetId($entityTypeId);
         $categorySetup->removeAttribute(\Magento\Catalog\Model\Category::ENTITY, 'featured_category');
        $categorySetup->addAttribute(\Magento\Catalog\Model\Category::ENTITY, 'featured_category', [
             'type' => 'int',
             'label' => 'Featured Category',
             'input' => 'select',
             'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
             'required' => true,
             'default' => 0,
             'sort_order' => 100,
             'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
             'group' => 'General Information',
        ]
    );
$installer->endSetup();
    }
}
