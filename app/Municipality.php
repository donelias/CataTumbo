<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipalities';


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
    protected $fillable = ['municipality', 'state_id'];


     public  static  function  municipalities($id)
     {
        return Municipality::where('state_id', $id)
            ->get();
     }


      public function state()
 {
        return $this->belongsTo(State::class);
 }

      public function parishes()
 {
        return $this->hasMany(Parish::class);
 }

}
