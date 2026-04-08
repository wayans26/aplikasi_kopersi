<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile_koperasi extends Model
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
