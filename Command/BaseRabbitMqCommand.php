<?php

namespace OldSound\RabbitMqBundle\Command;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

abstract class BaseRabbitMqCommand extends Command implements ContainerAwareInterface
{

    protected ContainerInterface $container;

    public function setContainer(ContainerInterface $container = null): void
    {
        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }
}
