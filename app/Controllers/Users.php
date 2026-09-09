<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'kinginthenorth',
                'full_name' => 'Robb Stark',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'threeeyedraven',
                'full_name' => 'Bran Stark',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'kingslayer',
                'full_name' => 'Jaime Lannister',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'littlebird',
                'full_name' => 'Sansa Stark',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'handofqueen',
                'full_name' => 'Missandei of Naath',
                'role'      => 'Staff',
            ],
        ];

        $data = [
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}