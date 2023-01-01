<?php

namespace App\Models\Portal;

use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Ramsey\Uuid\Uuid as PackageUuid;

class Buss_tax_assessments extends Model
{
    protected $connection = 'mysql2';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

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

    protected $table = 'buss_tax_assessments';

    public static function getAll(){
        return Buss_tax_assessments::select('*')->get();
    }
}
