<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CustomerController extends Controller
{
    /**
     * @var array<int, array<string, string>>
     */
    public static array $customers = [
        ['id' => 'CUS-1001', 'name' => 'Ava Martinez', 'email' => 'ava.martinez@example.com', 'phone' => '+1 555 010 1001', 'company' => 'Bright Bean Cafe', 'status' => 'Active'],
        ['id' => 'CUS-1002', 'name' => 'Liam Chen', 'email' => 'liam.chen@example.com', 'phone' => '+1 555 010 1002', 'company' => 'Northstar Market', 'status' => 'Active'],
        ['id' => 'CUS-1003', 'name' => 'Sofia Patel', 'email' => 'sofia.patel@example.com', 'phone' => '+1 555 010 1003', 'company' => 'The Daily Grind', 'status' => 'Active'],
        ['id' => 'CUS-1004', 'name' => 'Noah Williams', 'email' => 'noah.williams@example.com', 'phone' => '+1 555 010 1004', 'company' => 'Harbor Goods', 'status' => 'Pending'],
        ['id' => 'CUS-1005', 'name' => 'Mia Thompson', 'email' => 'mia.thompson@example.com', 'phone' => '+1 555 010 1005', 'company' => 'Paper & Pine', 'status' => 'Active'],
    ];

    public function index(): View
    {
        return view('customers.index', ['customers' => self::$customers]);
    }
}
