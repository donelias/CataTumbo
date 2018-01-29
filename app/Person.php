<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people';

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
    protected $fillable = ['type_id', 'identity', 'name', 'last_name', 'phone_nomber', 'cellphone', 'address', 'user_id', 'role_id', 'status_id', 'sector_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(TypePerson::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    
}
