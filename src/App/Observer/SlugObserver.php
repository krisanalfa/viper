<?php namespace App\Observer;

class SlugObserver
{
    public function saving($model)
    {
        $createdTime = $model->get('$created_time');
        $year = $createdTime->format('Y');
        $month = $createdTime->format('m');
        $title = preg_replace("/[^\da-z]/i", '-', $model->get('title'));
        $slug = $year.'-'.$month.'-'.strtolower($title);
        $model->set('slug', $slug);
    }
}
