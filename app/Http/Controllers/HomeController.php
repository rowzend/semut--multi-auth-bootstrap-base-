<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $usermode = Auth::user()->usermode ?? 'user'; // Default to 'user' if null

        switch ($usermode) {
            case 'admin':
                return view('backend/admin/dashboard');
            case 'approval':
                return view('backend/approval/dashboard');
            case 'verifikator':
                return view('backend/verifikator/dashboard');
            default:
                return view('backend/user/dashboard');
        }
    }
}
