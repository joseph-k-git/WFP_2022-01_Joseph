<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->authorize('checkmember');
        
        $user = Auth::user();
        $trans = Transaction::where('user_id', $user->id)->with('medicines')->get();

        $totals = [];
        foreach ($trans as $t => $tran) {
            $totals[$tran->id] = 0;
            $medicines = $tran->medicines;
            foreach ($medicines as $m => $med) {
                $item_detail = $med->pivot;
                $quantity = $item_detail->quantity;
                $price = $item_detail->price;
                $totals[$tran->id] += $quantity * $price;
            }
        }
        
        return view('home', compact('trans', 'totals'));
    }
}
