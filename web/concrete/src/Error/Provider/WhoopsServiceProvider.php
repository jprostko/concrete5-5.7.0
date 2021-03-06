<?php
namespace Concrete\Core\Error\Provider;

use Concrete\Core\Error\Handler\ErrorHandler;
use Concrete\Core\Error\Handler\JsonErrorHandler;
use Concrete\Core\Foundation\Service\Provider;
use Whoops\Handler\PlainTextHandler;
use Whoops\Run;

class WhoopsServiceProvider extends Provider
{

    public function register()
    {
        if (function_exists('ini_set')) {
            ini_set('display_errors', 0);
        }
        $run = new Run;

        $handler = new ErrorHandler();
        $json_handler = new JsonErrorHandler();
        $cli_handler = new PlainTextHandler();
        $cli_handler->onlyForCommandLine(true);

        $run->pushHandler($handler);
        $run->pushHandler($json_handler);
        $run->pushHandler($cli_handler);

        $run->register();
    }

}
