<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'surveys';
    protected $fillable = ['title', 'description', 'type'];

    public function Questions()
    {
        return $this->hasMany(Question::class);
    }
}
