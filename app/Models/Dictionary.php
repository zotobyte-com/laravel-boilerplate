<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $fillable = ['entity','value','key','sort','meta'];

    protected $casts = ['meta' => 'array'];

    public static function userStatus(){
        return self::dictionaryQuery('GENERAL','STATUS');
    }

    public static function pendingUserStatus(){
        return self::userStatus()->where('sort',0)->first();
    }

    public static function activeUserStatus(){
        return self::userStatus()->where('sort',1)->first();
    }

    public static function dictionaryQuery($entity,$key){
        return self::where('entity',$entity)->where('key',$key);
    }
}
