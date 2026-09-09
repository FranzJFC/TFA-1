<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0928-555-0198'],
            ['full_name' => 'Ana Reyes', 'email' => 'ana.reyes@example.com', 'phone' => '0939-224-7710'],
            ['full_name' => 'Carlo Mendoza', 'email' => 'carlo.mendoza@example.com', 'phone' => '0945-880-3321'],
            ['full_name' => 'Liza Garcia', 'email' => 'liza.garcia@example.com', 'phone' => '0956-441-9088'],
        ];

        return view('templates/header', ['title' => 'Customer Accounts', 'active' => 'customers'])
            . view('customers/index', ['customers' => $customers])
            . view('templates/footer');
    }
}
