<?php

namespace Toa\Bundle\TwitterBootstrapBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Twig extension
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 *
 */
class TwigGlobals extends \Twig_Extension
{
    /** @var ContainerInterface $container */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return array
     */
    public function getGlobals()
    {
        return array('toa_twitter_bootstrap' => $this->container->getParameter('toa_twitter_bootstrap'));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'toa_twitter_bootstrap';
    }
}
