<?php

namespace App\Models\CC;

use DB;
use Illuminate\Database\Eloquent\Model;

class CCContactType extends Model
{
    protected $primaryKey = 'keyID';
    protected $table = 'cms_contact_types';
    public $timestamps = false;

    public function getConnection()
    {
        if (env('APP_ENV') == 'production') {
            return DB::connection('cc_local');
        }

        return DB::connection('cc_remote');
    }
}
