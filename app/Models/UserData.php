<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    public $fillable = ['name', 'ans_1', 'ans_2'];

    protected $table = 'user_datas';


    public static function createUserData($request){
        return self::create([
            'name' => $request->name,
            'ans_1' => $request->option,
            'ans_2' => $request->answer
        ]);
    }
}
