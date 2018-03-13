<?php

namespace  App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;



use Illuminate\Http\Auth;

class NewController extends Controller
{
    public function page()
    {

      $id =  DB::table('client')->get(["id"])  ;

      $nom =  DB::table('client')->get(["nom"])  ;

      $mail =  DB::table('client')->get(["mail"])  ;

      $message =  DB::table('client')->get(["message"])  ;

        echo " <table border='1'>
                    <tr>
                    <td> id</td>
                    <td> nom</td>
                    <td> mail</td>
                    <td> message</td>
                    </tr>
                    <tr>
                    <td> $id</td>
                    <td> $nom</td>
                    <td> $mail</td>
                    <td> $message</td>
                    </tr>
                </table>";



        }


}