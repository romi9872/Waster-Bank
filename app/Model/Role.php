<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    protected $table = 'model_has_roles';

    public function user () {
        return $this->belongsTo('App\Model\User', 'model_id', 'id');
    }

    public function message() {
        return $this->belongsToMany('App\Model\Message', 'model_id', 'to');
    }
}
