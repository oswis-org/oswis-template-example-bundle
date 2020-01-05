<?php
/**
 * @noinspection PhpUnused
 */

namespace Zakjakub\OswisTemplateExampleBundle;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Zakjakub\OswisTemplateExampleBundle\DependencyInjection\ZakjakubOswisTemplateExampleExtension;

class ZakjakubOswisTemplateExampleBundle extends Bundle
{
    final public function getContainerExtension(): Extension
    {
        return new ZakjakubOswisTemplateExampleExtension();
    }
}
