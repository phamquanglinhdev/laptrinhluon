<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'grades';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'features' => 'array',
        'details' => 'array',
        'syllabus' => 'array',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getDuration()
    {
        try {
            return $this->features[0]["duration"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getStart()
    {
        try {
            return $this->features[0]["start"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getPrice()
    {
        try {
            return $this->features[0]["price"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getFLesson()
    {
        try {
            return $this->features[0]["lesson"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getSeat()
    {
        try {
            return $this->features[0]["seat"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getAbout()
    {
        try {
            return $this->details[0]["about"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getAward()
    {
        try {
            return $this->details[0]["award"];
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getLesson($lesson)
    {
        try {
            return json_decode($lesson);
        } catch (\Exception $exception) {
            return null;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function Category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function User()
    {
        return $this->belongsTo(User::class, "instructor", "id");
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
