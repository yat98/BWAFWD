<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Mail\TransactionSuccess;
use App\Models\TransactionMember;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(Transaction $transaction)
    {
        $transaction->load(['transactionMembers','travelPackage','user']);
        
        return view('pages.checkout.index', compact('transaction'));
    }

    public function process(Request $request, TravelPackage $travelPackage)
    {
        DB::beginTransaction();
        try {
            $transaction = Transaction::create([
                'travel_package_id' => $travelPackage->id,
                'user_id' => Auth::user()->id,
                'additional_visa' => 0,
                'transaction_total' => $travelPackage->price,
                'transaction_status' => 'IN_CART'
            ]);
    
            TransactionMember::create([
                'transaction_id' => $transaction->id,
                'username' => Auth::user()->username,
                'nationality' => 'ID',
                'is_visa' => false,
                'doe_passport' => Carbon::now()->addYears(5),
            ]);

            DB::commit();
            return redirect()->route('checkout.index', $transaction->id);
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('detail', $travelPackage);
        }
    }

    public function create(Request $request, Transaction $transaction)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'nationality' => 'required|string|max:5',
            'doe_passport' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $data = $request->all();
            $data['transaction_id'] = $transaction->id;

            TransactionMember::create($data);
            if($data['is_visa']){
                $transaction->transaction_total +=  190;
                $transaction->additional_visa +=  190;
            }
            
            $transaction->transaction_total += $transaction->travelPackage->price;
            $transaction->save();
            DB::commit();

            return redirect()->route('checkout.index', $transaction->id);
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('checkout.index', $transaction->id);
        }
    }

    public function remove(Request $request,  TransactionMember $transactionMember)
    {
        DB::beginTransaction();
        try {
            if($transactionMember->is_visa){
                $transactionMember->transaction->transaction_total -=  190;
                $transactionMember->transaction->additional_visa -=  190;
            }
            
            $transactionMember->transaction->transaction_total -= $transactionMember->transaction->travelPackage->price;
            $transactionMember->transaction->save();
            $transactionMember->delete();
            DB::commit();

            return redirect()->route('checkout.index', $transactionMember->transaction);
        } catch (Exception $e) {
            DB::rollback();       
            return redirect()->route('checkout.index', $transactionMember->transaction);
        }
    }


    public function success(Transaction $transaction)
    {
        $transaction->load(['travelPackage.galleries','transactionMembers','user']);
        $transaction->update([
            'transaction_status' => 'PENDING',
        ]);
        Mail::to($transaction->user->email)->send(new TransactionSuccess($transaction));

        return view('pages.success-checkout.index');
    }
}
