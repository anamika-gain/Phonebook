<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Favlist;
use Illuminate\Http\Request;

class FavlistController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Favlist $favlist)
    {
        //
    }

    public function edit(Favlist $favlist)
    {
        //
    }

    public function update(Request $request, Favlist $favlist)
    {
        //
    }

    function destroy($id)
    {
        $fav =DB::table('favlists')->where('id',"=",$id)->delete();
        return response()->json(['success' => 'Setting successfully updated']);
    }
}
