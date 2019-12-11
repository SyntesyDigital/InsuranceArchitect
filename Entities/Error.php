<?php

namespace Modules\Architect\Entities;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'errors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'errorable_id',
        'errorable_type',
        'error'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the owning errorable model.
     */
    public function errorable()
    {
        return $this->morphTo();
    }

    public function getErrorObject()
    {
        $className = $this->error;

        return new $className($this->errorable);
    }
}