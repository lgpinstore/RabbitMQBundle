<?php

namespace OldSound\RabbitMqBundle\Command;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

abstract class BaseRabbitMqCommand extends Command
{
    public function __construct(
        protected ContainerInterface $container,
    )
    {
        parent::__construct();
    }

    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }
}
