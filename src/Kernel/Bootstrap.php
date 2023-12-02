<?php
namespace BuyMeACoffee\Kernel;

use Symfony\Component\Dotenv\Dotenv;

final class Bootstrap
{
    public function __construct()
    {
        $dotenv = new Dotenv();
        $this->loadEnvironmentVariables($dotenv);
        echo $_ENV['SITE_URL'];
    }

    private function initialize()
    {

    }

    private function loadEnvironmentVariables(Dotenv $dotenv): void
    {
        $dotenv->load(__DIR__.'/.env');
    }
}
