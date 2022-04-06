<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public function getUser()
    {
        return $this->belongsTo(User::class, "name");
    }
}
