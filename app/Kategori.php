<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $timestamps = true;
    protected $table ='kategori_barang';
    protected $primaryKey = 'id_kategori_barang';
    
}
