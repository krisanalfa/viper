<?php namespace App\Observer;

class UpdateGravatar
{
    public function saving($model)
    {
        $email    = $model->get('email');
        $username = $model->get('username');
        $avatar   = __DIR__ . '/../../../www/assets/img/' . $username . '.jpeg';

        if (file_exists($avatar)) {
            unlink($avatar);
        }

        $gravatar = $this->getGravatar($email);

        $ch = curl_init($gravatar);

        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        // $retcode >= 400 -> not found, $retcode = 200, found.
        if ($retcode != '200') {
            $model->set('gravatar', 'logo.png');
        } else {
            $model->set('gravatar', $username.'.jpeg');
            copy($gravatar, $avatar);
        }

        curl_close($ch);
    }

    protected function getGravatar($email, $s = 180, $d = 'identicon', $r = 'g')
    {
        $url  = 'http://www.gravatar.com/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$s&d=$d&r=$r";

        return $url;
    }
}
