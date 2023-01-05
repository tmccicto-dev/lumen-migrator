<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Bpl_taxassessment extends Model
{
    // use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name', 'email',
    // ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    // protected $hidden = [
    //     'password',
    // ];

    protected $table = 'bpl_taxassessment';

    public static function getAll(){
        return Bpl_taxassessment::select('BusinessID as refID', 'BusinessID as business_profiles_id', 'AssessmentDate as assessment_date', 'YearID as assessment_year', 'Remarks as remarks', 'DateTimeCreated as created_at', 'DateTimeModified as updated_at', 'Frequency as payment_type')->get()->toArray();
    }

}
