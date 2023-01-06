<?php
declare(strict_types=1);

namespace DaoNguyen\EAV\Model\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ClothingMaterial extends AbstractSource
{
    /**
     * Get all options.
     *
     * @return array
     */
    public function getAllOptions(): array
    {
        if (!$this->_options) {
            $this->_options = [
                ['value' => 'cotton', 'label' => 'Cotton'],
                ['value' => 'leather', 'label' => 'Leather'],
                ['value' => 'silk', 'label' => 'Silk'],
                ['value' => 'denim', 'label' => 'Denim'],
                ['value' => 'fur', 'label' => 'Fur'],
                ['value' => 'wool', 'label' => 'Wool']
            ];
        }
        return $this->_options;
    }
}
