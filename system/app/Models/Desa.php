<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model{
    protected $table = 'desa';

    function kecamatan(){
        return $this->belongsTo(Kabupaten::class, 'id_kecamatan');
    }

}
