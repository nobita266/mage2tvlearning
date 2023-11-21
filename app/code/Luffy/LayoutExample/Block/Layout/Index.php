<?php
namespace Luffy\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;

class Index extends Template {
    protected function _prepareLayout() {
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle('Yaman developer');
        }

        return $this;
    }

    public function getSubTitle(): string{
        return "Magento developer";
    }
    public function getNodeHtml(): string{
        return $this->getLayout()->createBlock(Note::class)->toHtml();

    }

    
    
}