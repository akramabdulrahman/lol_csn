<?php
//
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return [
    'api_key' => 'b246e73f-6f17-4eb2-ad8d-6e4292a02875',
    'base_url_eune' => [
        'endpoint' => 'https://eune.api.pvp.net/{url}'
    ],
    'summoner.by-name' => [
        'required' => array('region', 'summonerNames'),
        'endpoint' => '/api/lol/{region}/v1.4/summoner/by-name/{summonerNames}'
    ],
    'summoner.by-id' => [
        'required' => array('region', 'summonerIds'),
        'endpoint' => '/api/lol/{region}/v1.4/summoner/{summonerIds}'
    ],
    'summoner.masteries.by-id' => [
        'required' => array('region', 'summonerIds'),
        'endpoint' => '"/api/lol/{region}/v1.4/summoner/{summonerIds}/masteries"'
    ],
];

