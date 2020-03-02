<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactForms extends Model
{
    protected $fillable = ['name', 'lastname', 'email', 'plan'];
}
