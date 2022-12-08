<?php
declare(strict_types=1);

namespace DaoNguyen\DependencyInjection\Block;

use DaoNguyen\DependencyInjection\Helper\Helper;
use Magento\Framework\View\Element\Template;

class DI extends Template
{
    /**
     * @var Helper
     */
    private Helper $helper;

    /**
     * @param Helper $helper
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Helper $helper,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->helper->getText();
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->helper->getNumber();
    }
}
