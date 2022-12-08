<?php

namespace DaoNguyen\Csp\Controller\Csp;

use Magento\Csp\Api\CspAwareActionInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface, CspAwareActionInterface
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

    /**
     * @inheritdoc
     */
    public function modifyCsp(array $appliedPolicies): array
    {
        $appliedPolicies[] = new \Magento\Csp\Model\Policy\FetchPolicy(
            'script-src',
            false,
            ['https://cdn.jsdelivr.net'],
            ['https']
        );

        return $appliedPolicies;
    }
}
