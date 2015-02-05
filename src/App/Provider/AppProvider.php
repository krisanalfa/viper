<?php namespace App\Provider;

use Bono\Provider\Provider;
use Norm\Norm;
use Exception;

/**
 * Basic URI mapping that not handled by NormController
 *
 * @author      Krisan Alfa Timur <krisan47@gmail.com>
 * @copyright   2013 PT Sagara Xinix Solusitama
 * @link        http://xinix.co.id/products/viper
 * @license     https://raw.github.com/krisanalfa/viper/master/LICENSE
 * @package     Viper
 */
class AppProvider extends Provider
{
    /**
     * Initialize the provider
     *
     * @return void
     */
    public function initialize()
    {
        $app = $this->app;

        if ($app->config('mode') === 'production') {
            // Error handling
            $app->error(function (Exception $e) use ($app) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                $app->render('sites/error');
                $app->stop();
            });

            // Not Found handling
            $app->notFound(function () use ($app) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not found', true, 404);
                $app->render('sites/notFound');
                $app->stop();
            });
        }
    }
}
