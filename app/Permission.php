<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    use SoftDeletes;

    protected $table = 'permissions';

    protected $hidden = [
    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];
}
