<?php
declare(strict_types=1);

namespace DaoNguyen\Csp\Model\Config\Backend;

use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Config\Value;
use Magento\Framework\App\Config\ValueInterface;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;

class CspConfig extends Value implements ValueInterface
{
    /**
     * @var WriterInterface
     */
    private WriterInterface $configWrite;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param ScopeConfigInterface $config
     * @param TypeListInterface $cacheTypeList
     * @param WriterInterface $writer
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        WriterInterface $writer,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data);
        $this->configWrite = $writer;
    }


    /**
     * @inhertidoc
     */
    public function afterSave()
    {
        $path = 'csp/mode/' . $this->getData('field') . '/report_only';
        $this->configWrite->save($path, ((bool)$this->getValue()) ? '0' : '1');
        return parent::afterSave();
    }

}
