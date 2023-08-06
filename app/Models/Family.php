<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;


class Family extends Model
{
    public $table = 'family_user';
    use HasFactory;
    const FAMILY_VALUE = [
        'orthodox'   => 'Orthodox',
        'traditional' => 'Traditional',
        'moderate' => 'Moderate',
        'liberal' => 'Liberal'
    ];
    const FAMILY_TYPE= [
        'joint_family'   => 'Join Family',
        'nuclear_family' => 'Nuclear Family',
    ];
    const FAMILY_STATUS= [
        'middle_class'   => 'Middle Class',
        'upper_middle_class' => 'Upper Middle Class',
        'rich_/_affluent'=>'Rich / Affluent',
    ];

    protected $fillable = [
        'id','created_at','family_value','family_type','family_status', 'native_place','father_occupation','mother_occupation','updated_at', 'user_id'

    ];



    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


}
