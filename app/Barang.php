<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;
    protected $table ='barang';
    protected $primaryKey = 'id_barang';
    
}
