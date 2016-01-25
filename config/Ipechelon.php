<?php

return [
    'parser' => [
        'name'          => 'IP-Echelon',
        'enabled'       => true,
        'report_file'   => '/^.*\.xml/i',
        'sender_map'    => [
            '/@ip-echelon.(com|us)/',
        ],
        'body_map'      => [
            //
        ],
    ],

    'feeds' => [
        'default' => [
            'class'     => 'COPYRIGHT_INFRINGEMENT',
            'type'      => 'ABUSE',
            'enabled'   => true,
            'fields'    => [
                'Type',
                'Port',
                'IP_Address',
                'TimeStamp'
            ],
            'filters'    => [
                'Notes',
                'Verification',
                'Service_Provider',
            ],
        ],

    ],
];
