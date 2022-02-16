<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [
    ];
    
    use HasFactory;


    public function clients()
    {
        return $this->hasMany(Client::class);
    }

}
