<?php
namespace LongitudeOne\CookiesConsentBundle\Tests\App;

use Exception;
use LongitudeOne\CookiesConsentBundle\CookiesConsentBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{

    /**
     * @inheritDoc
     */
    public function registerBundles(): iterable
    {
        return [
            new FrameworkBundle(),
            new CookiesConsentBundle(),
        ];
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__.'/config/config.yaml');
    }
}