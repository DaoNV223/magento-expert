<?php
declare(strict_types=1);

namespace DaoNguyen\EAV\Setup\Patch\Data;

use DaoNguyen\EAV\Model;
use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddClothingMaterialProductAttribute implements DataPatchInterface
{

    /**
     * @var ModuleDataSetupInterface
     */
    private ModuleDataSetupInterface $moduleDataSetup;

    /**
     * @var EavSetupFactory
     */
    private EavSetupFactory $eavSetupFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory          $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * Add clothing material product attribute.
     *
     * @return void
     */
    public function apply()
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $eavSetup->addAttribute(
            Product::ENTITY,
            'clothing_material',
            [
                'attribute_model' => Model\ClothingMaterial::class,
                'backend' => Model\Backend\ClothingMaterial::class,
                'type' => 'varchar',
                'frontend' => Model\Frontend\ClothingMaterial::class,
                'input' => 'select',
                'label' => 'Clothing Material',
                'frontend_class' => 'validate-number',
                'source' => Model\Source\ClothingMaterial::class,
                'required' => false,
                'user_defined' => 0,
                'default' => 'cotton',
                'unique' => 0,
                'group' => 'Product Details',
                'is_html_allowed_on_front' => true,
                'visible_on_front' => true,
                'visible' => true,
                'global' => ScopedAttributeInterface::SCOPE_STORE
            ]
        );
    }

    /**
     * Get array of patches that have to be executed prior to this.
     *
     * @return string[]
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * Get aliases (previous names) for the patch.
     *
     * @return string[]
     */
    public function getAliases(): array
    {
        return [];
    }
}
