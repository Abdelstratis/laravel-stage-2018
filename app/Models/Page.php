<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function page()
    {

        $parm =  DB::table('client')->get() ;

        return view('about');

    }


}