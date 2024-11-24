<?php

namespace App\Http\Controllers\cron;

use App\Http\Controllers\Controller;
use App\Models\Transaction as ModelsTransaction;
use Illuminate\Http\Request;

class Transaction extends Controller
{
    public function transaction(Request $request)
    {
        ModelsTransaction::fetchTransactionsFromApi();
        return response()->json(['status' => 'success']);
    }
}
