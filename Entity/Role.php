<?php

namespace Xtraball\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="user_role")
 * @ORM\Entity
 * @UniqueEntity(fields="name", message="This name already exists")
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @ORM\OneToOne(targetEntity="Role")
     * @ORM\JoinColumn(name="parent_name", referencedColumnName="name")
     */
    private $parent;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Role
     */
    public function getParent(): Role
    {
        return $this->parent;
    }

    /**
     * @param Role $parent
     */
    public function setParent(Role $parent) {
        $this->parent = $parent;
    }
}
