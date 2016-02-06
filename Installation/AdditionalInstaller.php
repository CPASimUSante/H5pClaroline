<?php

namespace CPASimUSante\H5pClarolineBundle\Installation;

use Claroline\InstallationBundle\Additional\AdditionalInstaller as BaseInstaller;

class AdditionalInstaller extends BaseInstaller
{
    protected $logger;

    public function preUpdate($currentVersion, $targetVersion)
    {
    }

    public function postUpdate($currentVersion, $targetVersion)
    {
    }
}
