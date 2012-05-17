<?php

namespace Toa\Bundle\TwitterBootstrapBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class TwigGlobals extends \Twig_Extension
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
      $this->container = $container;
    }

    public function getGlobals()
    {
      return array('toa_twitter_bootstrap' => $this->container->getParameter('toa_twitter_bootstrap'));
    }

    public function getName()
    {
        return 'toa_twitter_bootstrap';
    }
}