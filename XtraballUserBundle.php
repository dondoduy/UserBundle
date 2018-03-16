<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2016 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

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
        return new XtraballUserExtension('role_hierarchy');
    }
}
