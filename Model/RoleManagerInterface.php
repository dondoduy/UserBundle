<?php

namespace Xtraball\UserBundle\Model;

interface RoleManagerInterface
{
    /**
     * @return array
     */
    public function getRoles();

    /**
     * @return string
     */
    public function getClass();

    /**
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    public function getEntityManager();

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getEntityRepository();

    /**
     * @return \Xtraball\UserBundle\Model\RoleInterface
     */
    public function createRole();

    /**
     * @param \Xtraball\UserBundle\Model\RoleInterface $role
     */
    public function saveRole(RoleInterface $role);
}
