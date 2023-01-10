<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use DB;

class Bpl_business_profile extends Model
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

    protected $table = 'bpl_business_profile';

    public static function getAll(){
        // return Bpl_business_profile::select(DB::Raw("CONCAT(BusinessID, '-', AssessmentDate) AS refID"), 'BusinessID as buss_id', 'BusinessName as business_name', 'LessorName as lessor_name', 'BusinessContactNo as tel', 'BusinessContactNo as mobile', 'BusinessType as buss_type', 'DTINo as dti_no', 'DTIDate as dti_reg_date', 'DateTimeCreated as created_at', 'DateTimeModified as updated_at')->limit(10)->get()->toArray();
        return Bpl_business_profile::select('BusinessID as refID', 'BusinessID as buss_id', 'BusinessName as business_name', 'LessorName as lessor_name', 'BusinessContactNo as tel', 'BusinessContactNo as mobile', 'BusinessType as buss_type', 'DTINo as dti_no', 'DTIDate as dti_reg_date', 'DateTimeCreated as created_at', 'DateTimeModified as updated_at')->get()->toArray();
    }

}
