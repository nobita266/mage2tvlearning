<?php
namespace Luffy\Lmodule\Controller\Index;
use Magento\Framework\App\ActionInterface;
class Index implements ActionInterface{
    protected $resultFactory;
    public function __construct(\Magento\Framework\Controller\Result\RawFactory $resultFactory){
        $this->resultFactory = $resultFactory;  

    }
    public function execute(){
        return $this->resultFactory->create()
        ->setheader("Content-Type","application/json")
        ->setContents('<root><name>Yaman saini</name><job>Magento Developer</job></root>');
    }
}