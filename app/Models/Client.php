<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function Contract()
    {
        return $this->hasMany(Contract::class);
    }

    public function MaintainceRequest()
    {
        return $this->hasMany(MaintainceRequest::class);
    }
}
