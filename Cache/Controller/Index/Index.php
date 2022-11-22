<?php
declare(strict_types=1);

namespace DaoNguyen\Cache\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Index extends Action implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        $page = $this->pageFactory->create();
        //$page->setHeader('Cache-Control', 'max-age=0, must-revalidate, no-cache, no-store', true);
        //$this->getResponse()->setNoCacheHeaders();
        return $page;
    }
}
