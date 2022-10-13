<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use DB;
class EmailController extends Controller
{
    public function allemail($id)
    {
        $emails = DB::table('emails')
        ->where('contact_id',$id)->get();
 
        return response()->json([
            'emails' => $emails,
        ]);
    }
    public function edit($id)
    {
        $email=Email::find($id);
        return response()->json([
            'email' => $email,
        ]);
    }
    public function update(Request $request, $id)
    {
   
        $email=array();
        $email['email_address'] =$request->email_address;
        $update= DB::table('emails')->where('id',$id)->update($email);

        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
