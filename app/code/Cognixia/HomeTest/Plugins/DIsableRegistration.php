<?php

namespace Cognixia\HomeTest\Plugins;

use magento\Customer\Model\Registration;
use Magento\Framework\App\Config\ScopeConfigInterface;

class DisableRegistration
{
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ){}
    public function afterIsAllowed(
       Registration $subject,$result)
    {
        $path = 'customer/create_account/disable_customer_registration';

        $config = $this->scopeConfig->isSetFlag($path,$scopeType = ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
       
        if($config == true) return false;
         return false;
    }
}