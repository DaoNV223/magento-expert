<?php
declare(strict_types=1);

namespace DaoNguyen\Routing\Controller\Routing;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
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
        //throw new NotFoundException(__('123'));
        $page = $this->pageFactory->create();
        $page->setHeader('developer', 'Dao');
        return $page;
    }
}
