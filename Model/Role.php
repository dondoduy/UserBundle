<?php

namespace Xtraball\UserBundle\Model;

class Role implements RoleInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $parent;

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return $this->parent;
    }
}
