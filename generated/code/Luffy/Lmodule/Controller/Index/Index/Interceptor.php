<?php
namespace Luffy\Lmodule\Controller\Index\Index;

/**
 * Interceptor class for @see \Luffy\Lmodule\Controller\Index\Index
 */
class Interceptor extends \Luffy\Lmodule\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
