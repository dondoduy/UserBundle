<?php

namespace Xtraball\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('role_hierarchy');

        $rootNode
            ->children()
                ->scalarNode('role_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('role_manager')->defaultValue('role_hierarchy.role_manager.default')->end()
            ->end();

        return $treeBuilder;
    }
}
