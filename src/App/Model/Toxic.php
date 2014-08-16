<?php namespace App\Model;

use Norm\Model;
use Norm\Norm;
use Carbon\Carbon;

class Toxic extends Model
{
    public function getAuthorImage()
    {
        $image = 'logo.png';

        if (is_null($this->get('$created_by'))) {
            return $image;
        }

        $user = Norm::factory('User')->findOne($this->get('$created_by'));

        if ($user) {
            $image = $user->get('username').'.jpeg';
        }

        return $image;
    }

    public function getAuthorName($usernameOnly = false)
    {
        $user = Norm::factory('User')->findOne($this->get('$created_by'));

        if (is_null($user)) {
            return 'NN';
        }

        if ($usernameOnly === true) {
            return $user->get('username');
        }

        $name = [
            $user->get('first_name'),
            $user->get('last_name'),
        ];

        return implode(' ', $name);
    }

    public function sinceNow()
    {
        if (! $this->get('$created_time')) {
            return 'timestamp not recorded';
        }

        $now = Carbon::now();
        $entryDate = new Carbon($this->get('$created_time'));

        return $entryDate->diffForHumans($now);
    }

    public function getCreatedTime()
    {
        return $this->getFormatedTime($this->get('$created_time'));
    }

    public function getUpdatedTime()
    {
        return $this->getFormatedTime($this->get('$updated_time'));
    }

    public function hasUpdated()
    {
        $createdTime = new Carbon($this->get('$created_time'));
        $updatedTime = new Carbon($this->get('$updated_time'));

        return ($updatedTime->diffInSeconds($createdTime) > 0) ? true : false;
    }

    protected function getFormatedTime($time)
    {
        if (is_null($time)) {
            return 'NOTIME_ATTACHED';
        }

        $entryDate = new Carbon($time);

        return $entryDate->format('Y M, d H:i:s');
    }
}
