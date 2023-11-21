<?php
namespace Luffy\LayoutExample\Controller\Layout;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $resultFactory;
    public function __construct(PageFactory $resultFactory) {
        $this->resultFactory= $resultFactory;;
    }

    public function execute(){
        return $this->resultFactory->create();
        // $result->getConfig()->getTitle()->set("yaman saini");
        // $result->getLayout()->getBlock("page.main.title")->setPageTitle("Magento developer");
        // return $result;


    }
}