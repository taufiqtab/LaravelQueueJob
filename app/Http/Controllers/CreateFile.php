<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class CreateFile extends Controller
{
    //
    function createFile($filename, $length){

        echo "create file : ";
        Storage::put( $filename.'.txt', "start");
        for($i = 0; $i < $length; $i++){
            Storage::append($filename.'.txt', $i);
        }
        echo "Done";
        return true;
    }
}
