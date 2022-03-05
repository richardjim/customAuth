<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Log, Auth, Exception;

class CampaignController extends Controller
{
   
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
        // Log::info("$request");
      
        try{
         
            $campaigns = Campaign::where('campaign_id', Auth::id())->get();

            $campaigns = Campaign::all();
            $data = [
                'campaigns' => $campaigns
            ];
            return view('auth.home', $data);

        }catch(Exception $error){
            Log::info('CampaignController@index error message: ' . $error->getMessage());
            $message = 'Unable to get Resource. Encountered an error.';
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $campaign = new Campaign;
        $campaign->campaign_id = Auth::id();
        $campaign->name = $request->name;
        $campaign->domain = $request->domain;
        $campaign-> include_subdomain = $request->include_subdomain == 0 ? $request->include_subdomain == false : $request->include_subdomain ==true && $request->include_subdomain == 1;
        
        $campaign->save();
        return response()->json(['message'=>"save successfully"],200);
        
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

  
    // public function update(Request $request, $id)
//     {
//         $campaign = Campaign::find($id);
//         $campaign->update($request->all());
//   dd($request->all);
//         // return response()->json('Campaign data updated successfully!');
//         // return redirect()->route('index');
    //  {
    //     if (!Auth::check()) {
    //         return redirect('login');
    //     }

    //     $campaign = Campaign::find($id);
    //     // $campaign->campaign_id = Auth::id();
    //     $campaign->name = $request->name;
    //     $campaign->domain = $request->domain;
    //     $campaign-> include_subdomain = $request->include_subdomain == 0 ? $request->include_subdomain == false : $request->include_subdomain ==true && $request->include_subdomain == 1;
        
    //     $campaign->save();
    //     return redirect()->route('index');

    //     // ->with('success', 'Contact updated!');
// }
    
//     public function update($id, Request $request)
//     {
//         $campaign = Campaign::find($id);
//         $campaign->update($request->all());
//         return response()->json('campaign updated  successfully!');
//     }
  
    // public function destroy($id)
    // {
    // if (!Auth::check()) {
    //     return redirect('login');
    // }
    
    // {
    //     $campaign = Campaign::find($id);
    //     $campaign->delete();
    //     return response()->json('campaign deleted!');
    // }
    //     // $campaign = Campaign::find($id);
    //     // $campaign->delete();

    //     // // return response()->json('Campaign deleted successfully!');
    //     // return redirect()->route('index');
    // }
    public function delete(Request $request){
        try{

            $campaign = Campaign::where('id', $request->id)->where('user_id', Auth::id())->first();
            if (!$campaign) {
                $message = "campaign was not found";
                return response()->json(['message' => $message], 404);
            }

            $tag->delete();
            $message = "Tag deleted successfully";
            return response()->json(['message' => $message]);

        }catch(Exception $error){
            Log::info('CampaignController@delete error message: ' . $error->getMessage());
            $message = 'Unable to delete Resource. Encountered an error.';
            return response()->json([
                'error' => true,
                'status_code' => 404,
                "message" => $message,
            ], 500);
        }
    }

    private function handleError($message){
        Session::put('errorMessage', $message);
        return redirect()->back();
    }
}

