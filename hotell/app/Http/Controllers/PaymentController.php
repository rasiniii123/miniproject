<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = Auth::id();
        $user = User::find($userID);
        $payments = Payment::all();
        return view('admin.pembayaran.index', compact('payments','user','userID'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pembayaran.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'payment' => 'required|string|max:255', // Tambahkan aturan lain sesuai kebutuhan
        ], [
            'payment.required' => 'payment name is required..',
            // 'payment.string' => 'Category Name must be text.',
        ]);

        Payment::create($request->all());
        return redirect()->route('payment')->with("success", "Category data added successfully!");
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
        $payments = Payment::findOrFail($id);
        return view('admin.pembayaran.edit', compact('payments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'payment' => 'required|string|max:255',
        ], [
            'payment.required' => 'Payment name is required..',
        ]);

        $payments = Payment::find($id);
        $payments->update($request->all());
        return redirect()->route('payment')->with("success", "Category data updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payments = Payment::find($id);
        try {
            $payments->delete();
            return redirect()->route("payment")->with("success", "Payment data has been successfully deleted!");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('payment')->with("error", "Failed to delete because payment data is in use!");
        }
    }
}
