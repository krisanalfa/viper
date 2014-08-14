<?php namespace App\Observer;

class UpdateGravatar
{
    public function saving($model)
    {
        $email    = $model->get('email');
        $username = $model->get('username');
        $avatar   = __DIR__ . '/../../../www/assets/img/' . $username . '.jpeg';

        // Setting up avatar
        if (! file_exists($avatar)) {
            copy($this->getGravatar($email), $avatar);
        }
    }

    protected function getGravatar($email, $s = 180, $d = 'identicon', $r = 'g')
    {
        $url  = 'http://www.gravatar.com/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$s&d=$d&r=$r";

        return $url;
    }
}
