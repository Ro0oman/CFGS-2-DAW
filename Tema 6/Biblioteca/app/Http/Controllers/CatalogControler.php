<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogControler extends Controller
{
    public function getIndex(){
        return "getIndex";
    }

    public function getSHow($id){
        return "Get show ".$id;
    }

    public function getCreate(){
        return "getCreate";
    }
    public function getEdit($id){
        return "Get Edit ".$id;
    }
}
