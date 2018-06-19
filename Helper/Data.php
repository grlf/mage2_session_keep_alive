<?php
namespace Greenleaf\SessionKeepAlive\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getConfig($config_path = '')
    {
        if ($this->scopeConfig->getValue('keep_alive/general/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE)) {
            return $this->scopeConfig->getValue('keep_alive/general/'.$config_path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        }
        return false;
    }
}