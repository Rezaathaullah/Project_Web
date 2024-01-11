<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balap extends Model
{
    use HasFactory;

    protected $table = 'Balap';

    protected $fillable = ['id', 'nama', 'sinopsis', 'category_id', 'tahun', 'tim', 'foto_sampul'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
