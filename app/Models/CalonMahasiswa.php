<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    protected $table = 'calonmhs';
    protected $primaryKey = 'id_calonmhs';
    public $incrementing = true;
    public $timestamps = false;

    protected $guarded = [];
}
