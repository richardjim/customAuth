<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class createnotificationController extends Controller
{

    //  public function index()
    //  {
    //     // $campaigns = Campaign::where('campaign_id', Auth::id())->get();

    //     // $campaigns = Campaign::all();
    //     // $data = [
    //     //     'campaigns' => $campaigns
    //     // ];

    // return view('auth.notificationcreate');
    //  }

    public function index($Id)
    {

        $campaign = Campaign::where('id', $Id)->first();
        // $notification = Notification::where('user_id', Auth::id())->get();
        // $campaigns = Campaign::where('id', Auth::id())->get();
        // dd($notification);
        $data = [
            // 'page' => 'connections',
            // 'sub' => 'connection_tags',
            // 'notifications'=> $notification,
            'campaign' => $campaign,
        ];
        // return view('auth.details', $data);
        // return redirect()->route('show',$data);
        return view('auth.notificationcreate', $data);



        // return view("auth.details");

    }




    // return view("auth.details");

}
