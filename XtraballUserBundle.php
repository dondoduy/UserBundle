<?php

namespace Xtraball\UserBundle;

use Xtraball\UserBundle\DependencyInjection\XtraballUserExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class XtraballUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new XtraballUserExtension('user_bundle');
    }
}
