<?php

namespace App\Exceptions;

use Exception;
use Log;

class HackerAlertException extends Exception{

    public function report(){
        Log::critical('Hacker intento atacar');
    }


    public render(){
        return response()->json([
            'message'=>'hacker, you got no luck today'
        ]);
    }
