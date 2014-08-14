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

    public function getAuthorName()
    {
        $user = Norm::factory('User')->findOne($this->get('$created_by'));

        if (is_null($user)) {
            return 'NN';
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
        $time = $this->get('$created_time');

        if (is_null($time)) {
            return 'NOTIME_ATTACHED';
        }

        $entryDate = new Carbon($time);

        return $entryDate->format('Y M, d H:i:s');
    }

    public function getUpdatedTime()
    {
        $time = $this->get('$updated_time');

        if (is_null($time)) {
            return 'NOTIME_ATTACHED';
        }

        $entryDate = new Carbon($time);

        return $entryDate->format('Y M, d H:i:s');
    }

    public function hasUpdated()
    {
        $createdTime = new Carbon($this->get('$created_time'));
        $updatedTime = new Carbon($this->get('$updated_time'));

        return ($updatedTime->diffInSeconds($createdTime)) ? true : false;
    }
}
