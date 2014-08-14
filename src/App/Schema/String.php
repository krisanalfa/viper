<?php namespace App\Schema;

use Norm\Schema\String as Char;

class String extends Char
{
    public function formatInput($value, $entry = null)
    {
        return '<input class="form-control" type="text" value="'.$value.'" name="'.$this->get('name').'" placeholder="'.ucfirst($this->get('name')).'" />';
    }

    public function formatReadonly($value, $entry = null)
    {
        return '<input class="form-control" type="text" value="'.$value.'" readonly disabled />';
    }
}
