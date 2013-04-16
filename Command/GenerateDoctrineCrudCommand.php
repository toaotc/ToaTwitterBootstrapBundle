<?php

namespace Toa\Bundle\TwitterBootstrapBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand as BaseGenerateDoctrineCrudCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;

/**
 * GenerateDoctrineCrudCommand
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 */
class GenerateDoctrineCrudCommand extends BaseGenerateDoctrineCrudCommand
{
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('toa:generate:twitter-bootstrap-crud')
            ->setAliases(array());
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ref = new \ReflectionClass(new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), ''));
        $originalSkeletonDir = dirname($ref->getFileName()).'/../Resources/skeleton/crud';

        $skeletonDirs = array(
            __DIR__.'/../Resources/skeleton/crud',
            $originalSkeletonDir
        );

        $overrideDir = $this->getContainer()->get('kernel')->getRootDir().'/Resources/ToaTwitterBootstrapBundle/skeleton/crud';
        if (is_dir($overrideDir)) {
            array_unshift($skeletonDirs, $overrideDir);
        }

        $this->setGenerator(new DoctrineCrudGenerator(
            $this->getContainer()->get('filesystem'),
            $skeletonDirs
        ));

        parent::execute($input, $output);
    }
}
