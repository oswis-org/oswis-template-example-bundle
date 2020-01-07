<?php

namespace Zakjakub\OswisTemplateExampleBundle\DependencyInjection;

use RuntimeException;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     * @throws RuntimeException
     */
    final public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('zakjakub_oswis_template_example');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode->info('Default configuration for template example module for OSWIS (One Simple Web IS).')->end();

        return $treeBuilder;
    }

}