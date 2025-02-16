<?php

namespace Nebula\Core;

use Nebula\Core\Facades\Handler;
use Nebula\Core\Facades\Logger;
use Nebula\Core\Middlewares\CorsMiddleware;
use Exception;

class Application
{
    public static string $ROOT_DIR;
    public static Application $app;
    protected array $providers = [];

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->handleError();
        (new CorsMiddleware)->execute();
        $this->providers = Config::get('providers');
        $this->registerProviders();
    }

    public function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $provider = new $provider();
            $provider->register();
        }
    }

    public function run()
    {
        $response = new Response();
        $request = new Request();
        $router = Container::make('route');
        $router->request = $request;
        $router->response = $response;

        try {
            Logger::info('Request received', [
                'path' => $request->getPath(),
                'method' => $request->method()
            ]);
            echo $router->resolve();
        } catch (Exception $e) {
            Logger::error($e->getMessage(), ['exception' => $e]);
            $response->setStatusCode($e->getCode());
            echo Handler::handle($e, $response);
        }
    }
    protected function handleError()
    {
        register_shutdown_function(function () {
            $error = error_get_last();

            if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
                http_response_code(500);

                // Clear any previous output
                while (ob_get_level()) {
                    ob_end_clean();
                }

                // Pass error details to the fatal view
                global $caughtError;
                $caughtError = $error;
                require_once __DIR__ . "/Views/fatal.php";
                exit;
            }
        });

        // Handle Uncaught Exceptions
        set_exception_handler(function (\Throwable $exception) {
            http_response_code(500);
            error_log($exception); // Log the error for debugging

            // Clear any previous output
            while (ob_get_level()) {
                ob_end_clean();
            }

            // Pass exception details to the fatal view
            global $caughtError;
            $caughtError = [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'trace' => $exception->getTraceAsString()
            ];
            require_once __DIR__ . "/Views/fatal.php";
            exit;
        });
    }
}