<?php

namespace App\Http\Controllers;
use App\Models\DonationList;

use Illuminate\Http\Request;

class DonationListController extends Controller
{
    public function donationlist(){
        $donationlists=DonationList::all();
        return view('admin.pages.donationlist.donationlist',compact('donationlists'));
    }
    public function donationlistform(){
        
        return view('admin.pages.donationlist.donationlistform');
    }
    public function donationlistpost(Request $request){
        // dd($request->all());
        DonationList::create([
            'donation_form_date'=>$request->donation_form_date,
            'reason_for_donation'=>$request->reason_for_donation,
            'donation_form_status'=>$request->donation_form_status,
            

        ]);
        return redirect()->route(route:'DonationList');
             
    }
}
