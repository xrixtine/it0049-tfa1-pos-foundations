<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Jon Snow',
                'email'     => 'jon.snow@example.com',
                'phone'     => '0917-101-2026',
            ],
            [
                'full_name' => 'Daenerys Targaryen',
                'email'     => 'daenerys.targaryen@example.com',
                'phone'     => '0918-202-2026',
            ],
            [
                'full_name' => 'Tyrion Lannister',
                'email'     => 'tyrion.lannister@example.com',
                'phone'     => '0919-303-2026',
            ],
            [
                'full_name' => 'Arya Stark',
                'email'     => 'arya.stark@example.com',
                'phone'     => '0920-404-2026',
            ],
            [
                'full_name' => 'Brienne of Tarth',
                'email'     => 'brienne.tarth@example.com',
                'phone'     => '0921-505-2026',
            ],
        ];

        $data = [
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}