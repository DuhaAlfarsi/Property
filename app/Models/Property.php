<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function PropertyFeature()
    {
        return $this->hasMany(PropertyFeature::class);
    }

    public function Room()
    {
        return $this->hasMany(Room::class);
    }

    public function Home()
    {
        return $this->hasMany(Home::class);
    }

    public function Flat()
    {
        return $this->hasMany(Flat::class);
    }

    public function City()
    {
        return $this->hasMany(City::class);
    }

    public function MaintainceRequest()
    {
        return $this->hasMany(MaintainceRequest::class);
    }

    public function PropertyGroup()
    {
        return $this->hasMany(PropertyGroup::class);
    }

    public function Contract()
    {
        return $this->hasMany(Contract::class);
    }
}
