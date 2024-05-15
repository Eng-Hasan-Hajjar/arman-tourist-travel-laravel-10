<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arman extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'location','image','airport'

];

    public function arman_castles(): HasMany
    {
        return $this->hasMany(ArmanCastle::class);
    }
    public function arman_caves(): HasMany
    {
        return $this->hasMany(ArmanCave::class);
    }
    public function arman_churches(): HasMany
    {
        return $this->hasMany(ArmanChurche::class);
    }
    public function arman_forests(): HasMany
    {
        return $this->hasMany(ArmanForest::class);
    }
    public function arman_gardens(): HasMany
    {
        return $this->hasMany(ArmanGarden::class);
    }
    public function arman_lakes(): HasMany
    {
        return $this->hasMany(ArmanLake::class);
    }
    public function arman_malls(): HasMany
    {
        return $this->hasMany(ArmanMall::class);
    }
    public function arman_mountains(): HasMany
    {
        return $this->hasMany(ArmanMountain::class);
    }




    public function arman_museums(): HasMany
    {
        return $this->hasMany(ArmanMuseum::class);
    }
    public function arman_places(): HasMany
    {
        return $this->hasMany(ArmanPlace::class);
    }
    public function arman_slopes(): HasMany
    {
        return $this->hasMany(ArmanSlope::class);
    }
    public function arman_springs(): HasMany
    {
        return $this->hasMany(ArmanSpring::class);
    }
    public function arman_threaters(): HasMany
    {
        return $this->hasMany(ArmanThreater::class);
    }




}
