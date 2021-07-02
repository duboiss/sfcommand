<?php

declare(strict_types=1);

namespace App;

use App\Command\DefaultCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application as SymfonyApplication;
use Symfony\Component\HttpKernel\KernelInterface;

class Application extends SymfonyApplication
{
    /**
     * {@inheritdoc}
     *
     * @param Kernel $kernel
     */
    public function __construct(KernelInterface $kernel)
    {
        parent::__construct($kernel);

        if ($defaultName = DefaultCommand::getDefaultName()) {
            $this->setDefaultCommand($defaultName);
        }
    }
}
