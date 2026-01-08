<?php

return [
    'rooms' => [
        (object)[
            'name' => 'A-101 - Gedung A Lantai 1',
            'location' => 'Gedung A, Lantai 1',
            'devices' => [
                (object)['type' => 'AC', 'status' => 'off'],
                (object)['type' => 'Lampu', 'status' => 'on'],
            ]
        ],
        (object)[
            'name' => 'B-201 - Gedung B Lantai 2',
            'location' => 'Gedung B, Lantai 2',
            'devices' => [
                (object)['type' => 'AC', 'status' => 'on'],
                (object)['type' => 'Lampu', 'status' => 'off'],
            ]
        ],
    ],

    'consumptions' => [
        (object)[
            'date' => '2026-01-03',
            'room' => (object)['name' => 'A-101'],
            'amount' => 14.66
        ],
        (object)[
            'date' => '2026-01-02',
            'room' => (object)['name' => 'A-101'],
            'amount' => 12.93
        ],
        (object)[
            'date' => '2026-01-01',
            'room' => (object)['name' => 'A-101'],
            'amount' => 9.32
        ],
    ]
];
