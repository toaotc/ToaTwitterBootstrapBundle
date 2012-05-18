<?php

namespace Toa\Bundle\TwitterBootstrapBundle\Generator;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator as BaseDoctrineCrudGenerator;
use Toa\Bundle\TwitterBootstrapBundle\Extension\TwigGlobals;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Generator is the base class for all generators.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoctrineCrudGenerator extends BaseDoctrineCrudGenerator
{
  private $container;

  public function __construct(Filesystem $filesystem, $skeletonDir, ContainerInterface $container)
  {
    parent::__construct($filesystem, $skeletonDir);

    $this->container = $container;
  }


  protected function render($skeletonDir, $template, $parameters)
  {
    $twig = new \Twig_Environment(new \Twig_Loader_Filesystem($skeletonDir), array(
        'debug'            => true,
        'cache'            => false,
        'strict_variables' => true,
        'autoescape'       => false,
    ));
    $twig->addExtension(new TwigGlobals($this->container));

    return $twig->render($template, $parameters);
  }
}
