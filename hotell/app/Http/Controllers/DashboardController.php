<?php

namespace App\Http\Controllers;

use App\Charts\IncomeChart;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
            $user = User::find($userID);

public function index(IncomeChart $chart)
{
    // Periksa apakah pengguna telah login
    if (Auth::check()) {
        $userID = Auth::id();
        $user = User::find($userID);
        
        // Periksa peran pengguna
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, tampilkan dashboard admin
            $data['chart'] = $chart->build();
            $userregister = User::where('role', 'user')->count();
            $kamar = Room::all();
            return view('admin.dashboard', ['chart' => $chart->build()], compact('kamar', 'userregister'));
        } else {
            // Jika bukan admin, tampilkan dashboard pengguna biasa
            return view('dashboard');
        }
    } else {
        // Jika pengguna belum login, arahkan mereka ke halaman login
        return redirect()->route('login');
    }
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}



