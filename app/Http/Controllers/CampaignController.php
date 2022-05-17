<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Log, Auth, Exception;

class CampaignController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
// public function index()
//  {
//     $data['campaign'] = Campaign::orderBy('id','desc')->paginate(5);
//     return view('Campaign.index', $data);
// //    $campaigns = Campaign::all()->toArray();
// //   return array_reverse($campaigns);   
// //      return view ('auth.home'); 
// public function index(Request $request)
// { 
//     $campaigns = campaign::where('id', $request->Auth::id())->get();
//     dd($campaigns);
//         $data  = [
//             "campaigns" => $campaigns
//         ];
//     return view('index', $data);

// }
// public function index()
// {
//     // Log::info("request");
//     // $campaigns = Campaign::all()->toArray();
//     //   return array_reverse($campaigns);  
//     $campaigns = Campaign::all();
//     $data = [
//         'campaigns' => $campaigns
//     ];
//     // $campaigns = Campaign::table('campaigns')->paginate(5);
//     // $campaigns = campaign::paginate(5);
//     return view('auth.home', $data);

// }

public function index(Request $request)
{ 


try{
    
    $campaigns = Campaign::where('user_id', Auth::id())->get();

    $campaigns = Campaign::all();
    $data = [
        'campaigns' => $campaigns
    ];
    return view('auth.home', $data);

}catch(Exception $error){
    Log::info('CampaignController@index error message: ' . $error->getMessage());
    $message = 'Encountered an error.';
    return $this->handleError($message);
}
}


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
// public function create(Request $request) {
//     // Log::info("$request");
//     // dd($request->all());
//     try{
//         if(!$request->name || !$request->domain){
//             $message = "Campaign Details is required";
//             return response()->json(['message' => $message], 400);
//         }
    
//         $campaign = Campaign::firstOrNew([
//             // 'campaign_id' => Auth::id(),
//             'name' => $request->name,
//             'domain' => $request->domain,
//             'include_subdomain' => $request->include_subdomain ? false == "" : true == 1
//         ]);

//         $campaign->save();
//         return response()->json([
//             'message' => "Campaign was saved successfully",
//             'campaign' => $campaign

//         ]);

//     }catch(Exception $error){
//         Log::info('CampaignController@create error message: ' . $error->getMessage());
//         $message = 'Unable to create Resource. Encountered an error.';
//         return response()->json([
//             'error' => true,
//             'status_code' => 500,
//             "message" => $message,
//         ], 500);
//     }
// }


public function create(Request $request){
    // dd($request->all());
    try{
    if (!Auth::check()) {
        return redirect('login');
    }
    $campaign = new Campaign;
    $campaign->user_id = Auth::id();
    $campaign->name = $request->name;
    $campaign->domain = $request->domain;
    $campaign-> include_subdomain = $request->include_subdomain == 0 ? $request->include_subdomain == false : $request->include_subdomain ==true && $request->include_subdomain == 1;
    
    $campaign->save();
    return response()->json(['message'=>"save successfully",
    'campaign' => $campaign
],200);

}catch(Exception $error){
        Log::info(' message: ' . $error->getMessage());
     $message = 'Encountered an error.';
      return response()->json([
       'error' => true,
         'status_code' => 404,
         "message" => $message,
      ], 500);
    }
    
// return redirect()->route('index');
    // ->with('success','Campaign has been created successfully.');
// return response()->json(['message'=>"save successfully"],200);

// try {
    // return redirect()->route('campaign.index')
    // ->with('success','Campaign has been created successfully.');
    }   
    
// } catch (Exception $error) {
//     Log::info($error->getMessage());
// }




// public function show($id)
// {
// $campaign  = Campaign::find($id);
//     return response()->json($campaign);

// }
// public function edit(Campaign $campaign)
// {
//     //
// }

// public function update(Request $request){
//     dd($request->);

// try{

//     if(!$request->name || !$request->domain){
//         $message = " Details are required";
//         return response()->json(['message' => $message], 400);
//     }
//     // $campaign = Campaign::where('campaign_id', Auth::id())->where('id', $request->increment)->first();
//     $campaign = Campaign::where('increment', $request->increment)->first();
    
//     if (!$campaign) {
//         return response()->json([
//             'error' => true,
//             'status_code' => 404,
//             "message" => "campaign not found",
//         ], 404);
//     }

//     // $campaign->name = $request->name ? $request->name : $campaign->name;
//     $campaign->domain = $request->domain ? $request->domain : $campaign->domain;
//     // $campaign->include_subdomain = $request->include_subdomain ? $request->include_subdomain : $campaign->include_subdomain;
//     $campaign->save();

//     return response()->json([
//         'error' => false,
//         'campaign' => $campaign,
//         'message' => "updated successfully"
//     ], 200);
// }catch(Exception $error){
//     Log::info(' message: ' . $error->getMessage());
//     $message = 'Unable to update Resource. Encountered an error.';
//     return response()->json([
//         'error' => true,
//         'status_code' => 404,
//         "message" => $message,
//     ], 500);
// }
// }
public function update(Request $request){
   
    try {
        $campaign = Campaign::where('id', $request->id)->first();
        if(!$campaign){
            $message = "Campaign not found!";
            return response()->json(['message' => $message], 404);
        }
        // dd($campaign);
        $campaign->name = $request->name ? $request->name : $campaign->name;
        $campaign->domain= $request->domain ? $request->domain : $campaign->domain;
        // $campaign->include_subdomain= $request->include_subdomain ? $request->include_subdomain : $campaign->include_subdomain;
        $campaign-> include_subdomain = $request->include_subdomain == 0 ? $request->include_subdomain == false : $request->include_subdomain ==true && $request->include_subdomain == 1;
        //
        $campaign->save();
        return response()->json(["message" => "Updated Successfully!",
        'campaign' => $campaign
    ], 200);
    
    } catch (Exception $error) {
        Log::info('CampaignController@update error message: ' . $error->getMessage());
        $message = 'Sorry, unable to update. Please try again';
        return response()->json([
            'error' => true,
            "message" => $error
        ], 500);
    }
}
public function delete(Request $request){
try{

    // $campaign = Campaign::where('id', $request->id)->first();
    // $campaign->delete();
    // $message = 'Request completed';
    // return response()->json([
    // 	'status_code' => 200,
    // 	"message" => $message,
    // ], 200);

    $campaign = Campaign::where('id', $request->id)->first();
    if (!$campaign) {
        $message = "Campaign was not found";
        return response()->json(['message' => $message], 404);
    }

    $campaign->delete();
    $message = "Campaign deleted successfully";
return response()->json(['message' => $message]);
}catch(Exception $error){
    Log::info(' ' . $error->getMessage());
    $message = 'Unable to delete Resource. Encountered an error.';
    return response()->json([
        'error' => true,                                                                                                                                                     
        'status_code' => 404,
        "message" => $message,
    ], 500);
}
}

private function handleError($message){
// Session::put('errorMessage', $message);
return redirect()->back();
}
}

