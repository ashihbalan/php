<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        return view('resume', ['user' => $user]);
    }
}
