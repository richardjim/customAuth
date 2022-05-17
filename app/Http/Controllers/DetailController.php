<?php

use Auth, Session, Exception, Log;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Log, Auth, Exception;
use App\Models\Detail;
use App\Models\Notification;

class DetailController extends Controller

{
    public function index($Id){
        
        try{

            $campaign = Campaign::where('id', $Id)->first();
            //dd($campaign);
            $notification = Notification::where('campaign_id', Auth::id())->get();
            // $campaigns = Campaign::where('id', Auth::id())->get();
            // dd($notification);
           
           
            $data = [
               
                'notifications'=> $notification,
                'campaign' => $campaign,
            ];
            return view('auth.details', $data);
            // return redirect()->route('show',$data);

        }catch(Exception $error){
            Log::info('Detail@index error message: ' . $error->getMessage());
            $message = 'Unable to get Resource. Encountered an error.';
            return $error->getMessage();
        }
   
        
        // return view("auth.details");
   
}
}
