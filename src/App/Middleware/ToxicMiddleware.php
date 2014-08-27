<?php namespace App\Middleware;

use Slim\Middleware;
use Norm\Norm;

class ToxicMiddleware extends Middleware
{
    public function call()
    {
        $app = $this->app;

        // 2014-08-testing-html-tag

        $slug = str_replace('/', '', $app->request->getPathInfo());

        $entry = Norm::factory('Toxic')->findOne(['slug' => $slug]);

        if (!is_null($entry)) {
            $app->render('toxic/read', ['entry' => $entry]);
            $app->stop();
        }

        $this->next->call();
    }
}
