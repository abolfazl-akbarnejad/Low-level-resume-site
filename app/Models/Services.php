<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function count()
    // {
    //     $count = 0;
    //     $services   = Services::all();
    //     foreach ($services as $service) {
    //         if ($service->status == 1) {
    //             return $count++;
    //         }
    //     }
    // }
}
