<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function Tag()
    {
        return $this->belongsToMany(Tag::class, "grade_tag", "grade_id", "tag_id");
    }

    public function BelongStudent(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_course", "grade_id", "user_id");
    }

    public function isOwner(): bool
    {
        if (!backpack_auth()->check()) {
            return false;
        }
        if (backpack_user()->role == "admin") {
            return true;
        }
        $courses = User::find(backpack_user()->id)->Own()->get();
        foreach ($courses as $course) {
            if ($course->id == $this->id) {
                return true;
            }
        }
        return false;
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
