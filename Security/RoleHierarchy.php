<?php

namespace Xtraball\UserBundle\Security;

use Xtraball\UserBundle\Model\RoleInterface;
use Xtraball\UserBundle\Model\RoleManagerInterface;
use Symfony\Component\Security\Core\Role\RoleHierarchy as BaseRoleHierarchy;

final class RoleHierarchy extends BaseRoleHierarchy
{
    /**
     * RoleHierarchy constructor.
     *
     * @param \Xtraball\UserBundle\Model\RoleManagerInterface $role_manager
     */
    public function __construct(RoleManagerInterface $role_manager)
    {
        $map = $this->buildRolesTree($role_manager);
        parent::__construct($map);
    }

    /**
     * @param \Xtraball\UserBundle\Model\RoleManagerInterface $role_manager
     *
     * @return array
     */
    protected function buildRolesTree(RoleManagerInterface $role_manager)
    {
        $hierarchy = [];
        $roles = $role_manager->getRoles();
        foreach ($roles as $role) {
            if ($role instanceof RoleInterface) {
                if ($role->getParent()) {
                    if (!isset($hierarchy[$role->getParent()->getName()])) {
                        $hierarchy[$role->getParent()->getName()] = [];
                    }
                    $hierarchy[$role->getParent()->getName()][] = $role->getName();
                } else {
                    if (!isset($hierarchy[$role->getName()])) {
                        $hierarchy[$role->getName()] = [];
                    }
                }
            }
        }

        return $hierarchy;
    }
}
