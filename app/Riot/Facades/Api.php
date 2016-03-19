<?php

namespace Riot\Facades;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Support\Facades\Facade;
use GuzzleHttp\Client as HttpClient;

/**
 * Description of Api
 *
 * @author blackthrone
 */
class Api extends Facade {

    public static function get($url) {
        $client = new HttpClient([
            'verify' => false
        ]);
        $res = $client->get($url);
        if ($res->getStatusCode() != 200) {
            throw new WrongHttpResponse('The HTTP Response Code Recieved By Riot was : ' . $res->getStatusCode() . "!= 200");
        }
        return $res->getBody();
    }

    protected static function getFacadeAccessor() {
        return 'api/facades';
    }

}
