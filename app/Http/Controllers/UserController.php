<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * @var array<int, array<string, string>>
     */
    public static array $users = [
        ['id' => 'USR-2001', 'name' => 'Jordan Lee', 'email' => 'jordan.lee@example.com', 'role' => 'Store Manager', 'location' => 'Downtown Store', 'status' => 'Online'],
        ['id' => 'USR-2002', 'name' => 'Casey Rivera', 'email' => 'casey.rivera@example.com', 'role' => 'Cashier', 'location' => 'Downtown Store', 'status' => 'Online'],
        ['id' => 'USR-2003', 'name' => 'Taylor Brooks', 'email' => 'taylor.brooks@example.com', 'role' => 'Cashier', 'location' => 'Riverside Store', 'status' => 'Offline'],
        ['id' => 'USR-2004', 'name' => 'Morgan Kim', 'email' => 'morgan.kim@example.com', 'role' => 'Inventory Clerk', 'location' => 'Riverside Store', 'status' => 'Online'],
        ['id' => 'USR-2005', 'name' => 'Riley Adams', 'email' => 'riley.adams@example.com', 'role' => 'Supervisor', 'location' => 'Market Square Store', 'status' => 'Away'],
    ];

    public function index(): View
    {
        return view('users.index', ['users' => self::$users]);
    }
}
