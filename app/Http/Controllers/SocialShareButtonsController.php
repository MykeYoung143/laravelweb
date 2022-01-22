<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class SocialShareButtonsController extends Controller
{
    public function ShareWidget()
    {
        $shareComponent = Share::currentPage('MiaraO')
        ->facebook()
        ->twitter()
        ->telegram()
        ->whatsapp()->getRawLinks();
        //checking linknya berjalan atau tidak 
        dd($shareComponent);
    }
}
