<?php

namespace App\Http\Controllers;
use App\Models\TestifyPrayer;

use Illuminate\Http\Request;

class TestifyPrayerController extends Controller
{
    public function storeTestifyPrayer(Request $request) {
        $data = request()->validate([
            'senderName' => 'required',
            'senderEmail' => '',
            'senderPhone' => 'required',
            'senderAddress' => 'required',
            'category' => 'required',
            'details' => 'required',
        ]);

        TestifyPrayer::create([
            'senderName' => $data['senderName'],
            'senderEmail' => $data['senderEmail'],
            'senderPhone' => $data['senderPhone'],
            'senderAddress' => $data['senderAddress'],
            'category' => $data['category'],
            'details' => $data['details'],
        ]);

        return redirect()->back()->with('msgSuccess', 'Saved Successfully');
    }
}
