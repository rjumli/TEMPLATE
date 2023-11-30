<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'academic_year',
        'signatories',
        'information',
        'semester_id',
        'trimester_id',
        'quarter_id'
    ];

    public function agency()
    {
        return $this->belongsTo('App\Models\ListAgency', 'agency_id', 'id');
    }

    public function semester()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'semester_id', 'id');
    }

    public function trimester()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'trimester_id', 'id');
    }

    public function quarter()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'quarter_id', 'id');
    }

}
