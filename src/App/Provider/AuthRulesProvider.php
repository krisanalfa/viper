<?php namespace App\Provider;

use Bono\Provider\Provider;
use Slim\Route;

class AuthRulesProvider extends Provider
{
    public function initialize()
    {
        $that = $this;

        $app = $this->app;

        $app->filter('auth.authorize', function ($options) use ($that) {
            if (is_array($options) && isset($options['uri'])) {
                $uri = $options['uri'];
            } else {
                $uri = $options;
            }

            if ($that->checkURL('/toxic/:id', $uri)) {
                return true;
            }

            switch ($uri) {
                case '':
                case '/':
                case '/about':
                    return true;
            }

            return $options;
        }, 1);

        $app->filter('auth.authorize', function ($options) use ($app) {
            if (is_bool($options)) {
                return $options;
            }

            if (isset($_SESSION['user'])) {
                if (! empty($_SESSION['user'])) {
                    return true;
                }
            }

            return $options;
        }, 2);
    }

    protected function checkURL($uri, $request)
    {
        $router = new Route($uri, function () {
            // Silence is gold
        });

        return $router->matches($request);
    }
}
