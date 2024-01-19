<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        $userCounts = User::select(
            DB::raw('COUNT(name) as name_count'),
            DB::raw('COUNT(email) as email_count'),
            DB::raw('COUNT(password) as password_count'),
            DB::raw('COUNT(remember_token) as remember_token_count')
        )->get()->first();
// dd($userCounts);
        return view('welcome', compact('data','userCounts'));
    }
}
