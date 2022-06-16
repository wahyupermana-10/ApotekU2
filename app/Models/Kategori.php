<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function obats() {
        return $this->hasMany('App\Models\Obat', 'categoryid', 'id');
    }
}
