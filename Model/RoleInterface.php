<?php

namespace Xtraball\UserBundle\Model;

interface RoleInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return \Xtraball\UserBundle\Model\RoleInterface
     */
    public function getParent();
}
