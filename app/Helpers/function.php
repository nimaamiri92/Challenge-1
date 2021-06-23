<?php

use Illuminate\Http\Response;

function response($data,$code){
    return new Response($data, $code);
}