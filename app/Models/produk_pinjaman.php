<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk_pinjaman extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'files';
    // public $incrementing = true;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'path',
        'type',
        'extension',
    ];
}
