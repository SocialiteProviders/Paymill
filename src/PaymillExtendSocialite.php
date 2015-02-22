<?php
namespace SocialiteProviders\Paymill;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PaymillExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('paymill', __NAMESPACE__.'\Provider');
    }
}
