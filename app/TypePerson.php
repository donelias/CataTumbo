<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePerson extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'type_people';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_person'];

    public function person()
	{
		return $this->hasMany('App\Person');
	}
	
}
