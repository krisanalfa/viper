<?php namespace App\Observer;

class Slug
{
    public function saving($model)
    {
        $title = strtolower(preg_replace("/[^A-Za-z0-9 ]/", '', $model->get('title')));
        $title = preg_replace('/ /', '-', $title);

        $model->set('slug', $title);
    }
}
