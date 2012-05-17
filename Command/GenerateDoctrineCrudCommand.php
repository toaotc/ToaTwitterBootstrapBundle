<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Toa\Bundle\TwitterBootstrapBundle\Command;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand as BaseGenerateDoctrineCrudCommand;

/**
 * Generates a CRUD for a Doctrine entity.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class GenerateDoctrineCrudCommand extends BaseGenerateDoctrineCrudCommand
{
    private $generator;

    /**
     * @see Command
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('toa:generate:twitter-bootstrap-crud')
            ->setAliases(array())
        ;
    }

    protected function getGenerator()
    {
        if (null === $this->generator) {
            $this->generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        }

        return $this->generator;
    }
}
