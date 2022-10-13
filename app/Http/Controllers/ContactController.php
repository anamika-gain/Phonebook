<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Phone;
use App\Models\Email;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class contactController extends Controller
{
    
    public function index()
    {
        $contacts=DB::table('contacts')->get();
    	return view('pages.contact',compact('contacts'));
    }


    public function create()
    {
         
      
    }
    
  
    public function allcontacts()
    {
        $contacts = DB::table('contacts')->get();
 
        return response()->json([
            'contacts' => $contacts,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);

        $contacts = new Contact();
        $contacts->contact_name =$request->name;
        $contacts->user_id =Auth::id();
        if ($image = $request->file('image')) {
            $destinationPath = 'public/assetes/contact';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $contacts->image = "$profileImage";
        }
      
        $contacts->save();

        foreach($request->phone_no as $key => $phone_no){
            $phone=new Phone();
            $phone->contact_id =$contacts->id;
            $phone->phone_no=$request->phone_no[$key];
            $phone->save();
        };
        foreach($request->email as $key => $email){
            $phone=new Email();
            $phone->contact_id =$contacts->id;
            $phone->email_address=$request->email[$key];
            $phone->save();
        };

        return json_encode(array(
            "statusCode"=>200
        ));
    }

   
    public function show(contact $contact)
    {
        //
    }


    public function edit($id)
    {
        $contacts=contact::find($id);
        return view('pages.edit',compact('contacts'));
    
    }

   
    public function update(Request $request, $id)
    {
      //dd($request);
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);

        $contact=array();
        $contact['contact_name'] =$request->name;
        if($request->file('newimage')){
            $image = $request->file('newimage');
            $destinationPath = 'public/assetes/contact';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $contact['image'] = "$profileImage";
        }
        $update= DB::table('contacts')->where('id',$id)->update($contact);

        foreach($request->phone_no as $key => $phone_no){
            $phone=new Phone();
            $phone->contact_id =$id;
            $phone->phone_no=$request->phone_no[$key];
            $phone->save();
        };
        foreach($request->email as $key => $email){
            $phone=new Email();
            $phone->contact_id =$id;
            $phone->email_address=$request->email[$key];
            $phone->save();
        };
        return  redirect()->back()->with('success','Contact Successfully Updated');
    }

   function deletePhone($id){
    $phone =DB::table('phones')->where('id',"=",$id);
    return $phone->delete();
   }

   function deleteEmail($id){
    $email =DB::table('emails')->where('id',"=",$id);
    return $email->delete();
   }
     function destroy($id)
    {
        $contact =DB::table('contacts')->where('id',"=",$id);
        return $contact->delete();
    }

    public function Addfavlist ($id){
        $userid=Auth::id();
        $check=DB::table('favlists')->where('user_id',$userid)->where('contact_id',$id)->first();

        $data = array(
            'user_id' => $userid,
            'contact_id'=>$id
        );

        if (Auth::check()) {
            if ($check) {

                return response()->json(['error' => 'Contact Already has on your Favlist']);
            }else{
                DB::table('favlists')->insert($data);
                
                return response()->json(['success' => 'Successfully Added to your Favlist']);
            }
        }else{
            
            return response()->json(['error' => 'At first login your account']);
        }
    }

    
    public function favlist(){

        return view('pages.favlist');
    }
    public function allfavlist(){

        $userid=Auth::id();
        $contacts=DB::table('favlists')->join('contacts','favlists.contact_id','contacts.id')
            ->select('contacts.*','favlists.user_id','favlists.id AS FavID')
            ->where('favlists.user_id',$userid)
            ->get();
 
        return response()->json([
            'contacts' => $contacts,
        ]);
    }

    public function details($id)
    {
        $userid=Auth::id();
        $contacts =DB::table('contacts')->where('id',"=",$id)->first();
        return view('pages.details',compact('contacts'));
    }
}
