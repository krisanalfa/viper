<?php namespace App\Schema;

use Norm\Schema\Password as Secret;

class Password extends Secret
{
    public function formatInput($value, $entry = null)
    {
        return '<div class="row">
            <div class="col-md-6">
                <input class="form-control" type="password" name="'.$this->get('name').'" placeholder="'.ucfirst($this->get('name')).'" />
            </div>'.
            '<div class="col-md-6">
                <input class="form-control" type="password" name="'.$this->get('name').'_confirmation" placeholder="'.ucfirst($this->get('name')).' confirmation"/>
            </div>
        </div>';
    }

    public function formatReadonly($value, $entry = null)
    {
        return '<input class="form-control" type="text" value="*hidden*" readonly disabled />';
    }
}
