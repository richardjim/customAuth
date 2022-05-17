<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Log, Auth, Exception;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
// public function index(Request $request)
//  {
   
   
//     try{
      
    
//         $notifications = Notification::all();
//         $data = [
//             'notifications' => $notifications
//         ];
       
//         return view('auth.coupon', $data);
    
//     }catch(Exception $error){
//         Log::info('' . $error->getMessage());
//         $message = 'Encountered an error.';
//         return $this->handleError($message);
//     }
//     }
  public function create(Request $request){
// dd($request->all());
    try{
    
    $notification = new Notification();
    if(!$request->select){
        $message = "Select a Notification!";
        return response()->json(["message" => $message], 400);
    }
    // $notification->name = ($request->name) ? $request->name : "";
    $notification->name = "A New Notification";
    $notification->user_id = Auth::id();
    $notification->select = $request->select;
    $notification->campaign_id = $request->campaign_id;
    $notification->save();
    if($notification->save()){
       // dd($notification->campaign_id);
       return response()->json([
        'message'=>"save successfully",
        'notification' => $notification,
        'url'=> route('shownotification.index',$notification->id)
    ],200);
    // return route('detail.index',$notification->campaign_id);
    }else{
        $message = "Error creating notification!";
        return response()->json(['message' => $message], 500); 
    }
}catch(Exception $error){
        Log::info('notificationController@index message: ' . $error->getMessage());
     $message = 'create Encountered an error.';
      return response()->json([
       'error' => true,
         'status_code' => 404,
         "message" => $message,
      ], 500);
    }
}
public function update(Request $request){
  try {
    //  dd($request->all());
      $notification = Notification::where('id', $request->id)->first();
      if(!$notification){
          $message = "Notification not found!";
          return response()->json(['message' => $message], 404);
      }
      $notification->select = $notification->select;
      $notification->campaign_id = $request->campaign_id;
      $notification->user_id = Auth::id();
      $notification->name = $request->name;
      $notification->title = $request->title;
      $notification->image_URL = $request->image_URL;
      $notification->image_Alt = $request->image_Alt;
      $notification->Coupon_code = $request->Coupon_code;
      $notification->Button_URL = $request->Button_URL;
      $notification->Button_text = $request->Button_text;
      $notification->Footer_text = $request->Footer_text;
      $notification->notification_URL = $request->notification_URL;
      $notification->Email_Placeholder = $request->Email_Placeholder;
      $notification->Thank_you_URL = $request->Thank_you_URL;
      $notification->Video_URL = $request->Video_URL;
      $notification->Link_URL = $request->Link_URL;
      $notification->Link_text = $request->Link_text;
      $notification->Content_Description = $request->Content_Description;
      $notification->Content_title = $request->Content_title;
      $notification->Input_Placeholder = $request->Input_Placeholder;
      $notification->save(); 
      return response()->json(["message" => "Updated Successfully!",
      'notification' => $notification
  ], 200);
  } catch (Exception $error) {
      Log::info($error->getMessage());
      $message = 'Sorry, unable to update. Please try again';
      return response()->json([
          'error' => true,
          "message" => $error
      ], 500);
  }
}
public function delete(Request $request){
  try{
    $notification = Notification::where('id', $request->id)->first();
    if (!$notification) {
        $message = "Notification was not found";
        return response()->json(['message' => $message], 404);
    }
    $notification->delete();
    $message = "Notification deleted successfully";
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
// private function handleError($message){
// // Session::put('errorMessage', $message);
// return redirect()->back();
}
