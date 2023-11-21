<?php
namespace Luffy\Lmodule\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface{
    protected $jsonFactory;
    public function __construct(JsonFactory $jsonFactory){
        $this->jsonFactory = $jsonFactory;
    }

    public function execute(){
        return $this->jsonFactory->create()
        ->setheader("Content-Type","application/json")
        ->setData([
            "name"=>"Yaman saini",
            "job"=> "Magento developer",
        ]);
    }
}