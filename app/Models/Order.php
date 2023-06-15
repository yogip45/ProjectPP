<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    protected $fillable = [        
        'nomor_meja',
        'menu_id',
        'jumlah',
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
