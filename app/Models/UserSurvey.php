<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSurvey extends Model
{
    protected $table = 'user_surveys';
    protected $fillable = [
        'name',
        'jabatan',
        'email',
        'phone',
        'jumlah_lulusan',
        'ipk_minimal',
        'institution_name',
        'institution_address',
        'institution_province',
        'institution_city',
        'institution_email',
        'institution_phone',
        'institution_business_field',
        'kepatuhan',
        'sikap',
        'emosional',
    ];
}