<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sectors';

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
    protected $fillable = ['sector', 'parish_id'];

    public  static  function  sectors($id)
    {
        return Sector::where('parish_id', $id)
            ->get();
    }

    public function parish()
    {
        return $this->belongsTo(Parish::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    
}
