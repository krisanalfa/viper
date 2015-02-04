<?php namespace App\Middleware;

use Slim\Middleware;
use Norm\Norm;

class SlugMiddleware extends Middleware
{
    public function call()
    {
        $slug = $this->app->request->getPathInfo();
        $slug = preg_replace('/^\//', '', $slug);

        $model = Norm::factory('Toxic')->findOne(['slug' => $slug]);

        if (! is_null($model)) {
            $this->app->render('toxic/read', ['entry' => $model]);
        } else {
            $this->next->call();
        }
    }
}
