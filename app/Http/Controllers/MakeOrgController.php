<?php

namespace App\Http\Controllers;

use App\Models\Org;
use Illuminate\Http\Request;

class MakeOrgController extends Controller
{

    public function entry(User $user)
    {
        $user->email        =   Input::get('email');
        $user->mobile       =   Input::get('mobile');
        $user->name         =   Input::get('name');
        $user->save();
        $org                =   Org::firstOrNew(['id'=>$user->id]);
        $org->address       =   Input::get('address');
        $org->save();
        return $user;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //R
        $orgs=ORG::all();
        var_dump($orgs);
        //return view('pages.org.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.org.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrg $request)
    {
        //
        $user               =   new User();
        $user->role_id      =   1;
        $user->password     =   str_random(8); 
        $user=entry($user);

        //Mail HERE
        Mail::to(Input::get('email'))->queue(new WelcomeOrg(Input::get('name'),$user->password));

        return redirect()->route('org.show', ['org' => $user->id])->with('status', 'Successfully Created');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Org  $org
     * @return \Illuminate\Http\Response
     */
    public function show(Org $org)
    {
        //
        return view('pages.org.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Org  $org
     * @return \Illuminate\Http\Response
     */
    public function edit(Org $org)
    {
        //
        return view('pages.org.create')->with('org',$org);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Org  $org
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrg $request, Org $org)
    {
        //
        $user=$org->user();
        $user=entry($user);
        return redirect()->route('org.show', ['org' => $user->id])->with('status', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Org  $org
     * @return \Illuminate\Http\Response
     */
    public function destroy(Org $org)
    {
        //
        $org->delete();
        return redirect()->route('org.index')->with('status', 'Successfully Deleted');
    }
}
