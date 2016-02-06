<?php

namespace CPASimUSante\H5pClarolineBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
use CPASimUSante\H5pClarolineBundle\Installation\AdditionalInstaller;

/**
 * Bundle class.
 * Uncomment if necessary.
 */
class CPASimUSanteH5pClarolineBundle extends PluginBundle
{
    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();
        return $config->addRoutingResource(__DIR__ . '/Resources/config/routing.yml', null, 'h5pclaroline');
    }

    /*
    public function getAdditionalInstaller()
    {
        return new AdditionalInstaller();
    }
    */

    public function hasMigrations()
    {
        return false;
    }
}
