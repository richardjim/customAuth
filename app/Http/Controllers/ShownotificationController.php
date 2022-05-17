<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Log, Auth, Exception;
use App\Models\Notification;

class ShownotificationController extends Controller
{

      public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index($Id){
         
        
        $notification = Notification::where('id', $Id)->first();
        $campaign = Campaign::where('id', $notification->campaign_id)->first();
        
        // $campaigns = Campaign::where('id', Auth::id())->get();
        //dd($campaign);
        $data = [
            'notifications'=> $notification,
            'campaign' => $campaign,
        ];
        // return view('auth.details', $data);
        // return redirect()->route('show',$data);
        return view('auth.coupon', $data);
    
    
    }
}
