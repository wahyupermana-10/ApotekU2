<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function kategori() {
        return $this->belongsTo('App\Models\Kategori', 'categoryid');
    }
}
