<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allphone($id)
    {
        $phones = DB::table('phones')
        ->where('contact_id',$id)->get();
 
        return response()->json([
            'phones' => $phones,
        ]);
    }
    public function edit($id)
    {
        $phone=Phone::find($id);
        return response()->json([
            'phone' => $phone,
        ]);
    }
    
    public function update(Request $request, $id)
    {
   
        $phone=array();
        $phone['phone_no'] =$request->email_address;
        $update= DB::table('phones')->where('id',$id)->update($phone);

        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
