<?php

return [
    'consul' => [
        'address' => '118.24.109.254',
        'port'    => 8500,
        'register' => [
            'ID'                =>'pay',
            'Name'              =>'pay-php',
            'Tags'              =>['primary'],
            'Address'           =>'118.24.109.254',
            'Port'              =>9503,
            'Check'             => [
                'tcp'      => '118.24.109.254:9503',
                'interval' => '10s',
                'timeout'  => '2s',
            ]
        ],
        'discovery' => [
            'name' => 'user',
            'dc' => 'dc',
            'passing' => true
        ]
    ],
];