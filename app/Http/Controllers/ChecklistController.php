<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checklist;
use Session;
use Illuminate\Support\Facades\DB;

class ChecklistController extends Controller
{
    //
    function index()
    {
        $data= Checklist::all();
        return view('checklist', ['Checklists'=>$data]);
    }
    function checklist(Request $req)
    {
        if($req->session()->has('user'))
        {
            $checklist= new Checklist;
            $checklist->user_id=$req->session()->get('user')['id'];
            $checklist->attire=$req->attire;
            $checklist->make_up=$req->make_up;
            $checklist->catering=$req->catering;
            $checklist->decoration=$req->decoration;
            $checklist->venue=$req->venue;
            $checklist->bakery=$req->bakery;
            $checklist->Jewellery=$req->Jewellery;
            $checklist->save();
            return redirect('mychecklist');
        }
        else 
        {
            return redirect('/login');
        }
    }
    function myChecklist()
    {
        if(session()->has('user'))
        {
            $userId=Session::get('user')['id'];
            $checklists= DB::table('checklists')
            ->join('users','checklists.user_id','=','users.id')
            ->where('checklists.user_id',$userId)
            ->get();

            return view('mychecklist',['checklists'=>$checklists]);
        }
        else 
        {
            return redirect('/login');
        }
    }
    function showdataC($id)
    {
        if(session()->has('user'))
        {
        $userId=Session::get('user')['id'];
        $data= Checklist::find($id);
        return view('editchecklist', ['data'=>$data]);
        }
        else 
        {
            return redirect('/login');
        }
    }
    function upDateC(Request $req)
    {
        if($req->session()->has('user'))
        {
            $data= Checklist::find($req->id);
            $data->user_id=$req->session()->get('user')['id'];
            $data->attire=$req->attire;
            $data->make_up=$req->make_up;
            $data->catering=$req->catering;
            $data->decoration=$req->decoration;
            $data->venue=$req->venue;
            $data->bakery=$req->bakery;
            $data->Jewellery=$req->Jewellery;
            $data->save();
            return redirect('mychecklist');
        }
        else 
        {
            return redirect('/login');
        }
        
    }

}
