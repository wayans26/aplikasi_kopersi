<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category_akun extends Model
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
