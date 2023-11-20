<?php
namespace Luffy\Lmodule\Controller\Index;
use Magento\Framework\App\ActionInterface;
class Index implements ActionInterface{
    protected $resultFactory;
    public function __construct(\Magento\Framework\Controller\Result\RawFactory $resultFactory){
        $this->resultFactory = $resultFactory;  

    }
    public function execute(){
        return $this->resultFactory->create()->setContents("Example");
    }

}