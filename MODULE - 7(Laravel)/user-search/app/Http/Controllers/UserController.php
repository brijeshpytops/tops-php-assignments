<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $users = User::query()
            ->search(['name', 'email'], $searchTerm)
            ->get();

        return view('users.index', compact('users'));
    }
}
