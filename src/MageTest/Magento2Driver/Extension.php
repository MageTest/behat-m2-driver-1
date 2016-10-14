<?php

namespace MageTest\Magento2Driver;

use Behat\Testwork\ServiceContainer\Extension as BehatExtension;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class Extension implements BehatExtension
{
    const CONFIG_KEY = 'magento2driver';

     /**
     * {@inheritdoc}
     */
    public function getConfigKey()
    {
        return self::CONFIG_KEY;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        // nothing to do here
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(ExtensionManager $extensionManager)
    {
        // nothing to do here
    }

    /**
     * {@inheritdoc}
     */
    public function configure(ArrayNodeDefinition $builder)
    {
//        $builder
//            ->children()
//                ->scalarNode(Config::CONFIG_KEY_MAGENTO_BOOTSTRAP_PATH)
//                    ->defaultValue(getcwd() . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'bootstrap.php')
//                ->end()
//                ->arrayNode(Config::CONFIG_KEY_MAGENTO_CONFIGS)
//                    ->prototype('array')
//                        ->children()
//                            ->scalarNode('path')
//                                ->isRequired()
//                                ->cannotBeEmpty()
//                            ->end()
//                            ->scalarNode('value')
//                                ->isRequired()
//                            ->end()
//                            ->enumNode('scope_type')
//                                ->values(array('default', 'stores', 'websites'))
//                                ->defaultValue('default')
//                            ->end()
//                            ->scalarNode('scope_code')
//                                ->defaultValue(null)
//                            ->end()
//                        ->end()
//                    ->end()
//                ->end()
//            ->end();
    }

    /**
     * {@inheritdoc}
     */
    public function load(ContainerBuilder $container, array $config)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/config'));
        $loader->load('services.xml');

//        $extensionConfig = new Config($config);
//        $container->set('bex.magento2_init_extension.config', $extensionConfig);
    }
}
