<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Rafael Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Bianca Flores', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Mark Villanueva', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Elena Ramos', 'role' => 'Manager'],
            ['username' => 'stock01', 'full_name' => 'Nico Bautista', 'role' => 'Inventory Staff'],
        ];

        return view('templates/header', ['title' => 'User Accounts', 'active' => 'users'])
            . view('users/index', ['users' => $users])
            . view('templates/footer');
    }
}
