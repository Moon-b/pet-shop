<?php

namespace App\Http\Controllers;
use App\Models\AdoptionList;

use Illuminate\Http\Request;

class AdoptionListController extends Controller
{
    public function adoptionlist(){
        $adoptionlists=AdoptionList::all();
        return view('admin.pages.adoptionlist.adoptionlist',compact('adoptionlists'));
    }
    public function adoptionlistform(){
        
        return view('admin.pages.adoptionlist.adoptionlistform');
    }
    public function adoptionlistpost(Request $request){
        // dd($request->all());
        AdoptionList::create([
            'adoption_form_date'=>$request->adoption_form_date,
            'reason_for_adoption'=>$request->reason_for_adoption,
            'adoption_form_status'=>$request->adoption_form_status,
            

        ]);
        return redirect()->route(route:'AdoptionList');
             
    }
}
