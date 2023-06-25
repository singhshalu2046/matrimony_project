<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class SubCast extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'subcasts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'status',
        'cast_id',
        'religion_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function getReligion(){
        return $this->belongsTo(Religion::class,'religion_id', 'id');
    }
    public function getCast(){
        return $this->belongsTo(Cast::class,'cast_id', 'id');
    }
}
