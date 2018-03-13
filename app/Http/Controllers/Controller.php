<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
        $nom = $req->input('nom');
        $mail = $req->input('mail');
        $message = $req->input('message');

        $data = array('nom'=>$nom,"mail"=>$mail,"message"=>$message);

        DB::table('client')->insert($data);

        echo'Formulaire reçu !';



    }
}
