<?php
declare(strict_types=1);

namespace DaoNguyen\AdvancedJavascript\Controller\Advanced;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Javascript implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;

    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        return $this->pageFactory->create();
    }
}
