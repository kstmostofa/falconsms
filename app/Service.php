<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Service extends Model
{
    public function getGateway()
    {
        return $this->belongsTo(Gateway::class, "gateway_name");
    }
}
