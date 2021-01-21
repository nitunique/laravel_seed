<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var stringSS
     */
    //protected $table = 'usermodels as users';

    protected $fillable = [
        'name', 'email', 'address','role_id'
    ];

    protected $appends = ['role'];

    public function roles()
    {
        return $this->hasone('App\Rolemodel','id','role_id');
    }
}
