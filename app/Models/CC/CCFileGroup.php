<?php

namespace App\Models\CC;

use DB;
use Illuminate\Database\Eloquent\Model;

class CCFileGroup extends Model
{
    protected $primaryKey = 'docID';
    protected $table = 'cms_issue_category_docs';
    public $timestamps = false;

    public function getConnection()
    {
        if (env('APP_ENV') == 'production') {
            return DB::connection('cc_local');
        }

        return DB::connection('cc_remote');
    }
}
