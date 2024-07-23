<?php

namespace OldSound\RabbitMqBundle\Command;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

abstract class BaseRabbitMqCommand extends Command
{
    protected ?ContainerInterface $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;

        parent::__construct();
    }

    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }
}
