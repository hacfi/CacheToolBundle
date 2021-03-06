<?php

/*
 * This file is part of CacheToolBundle.
 *
 * (c) Samuel Gordalina <samuel.gordalina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CacheTool\Bundle\Command;

use CacheTool\Command\OpcacheStatusScriptsCommand as BaseOpcacheStatusScriptsCommand;

class OpcacheStatusScriptsCommand extends BaseOpcacheStatusScriptsCommand
{
    protected $container;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        $this->setName('cachetool:opcache:status:scripts');
    }

    /**
     * @return CacheTool
     */
    protected function getCacheTool()
    {
        return $this->getContainer()->get('cachetool');
    }

    /**
     * @return ContainerInterface
     */
    protected function getContainer()
    {
        if (null === $this->container) {
            $this->container = $this->getApplication()->getKernel()->getContainer();
        }

        return $this->container;
    }
}
