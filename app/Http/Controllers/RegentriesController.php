<?php

namespace App\Http\Controllers;

use App\Models\Regentries;
use Illuminate\Http\Request;

class RegentriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $datas = Regentries::all();
        return view('admin', ['datas'=> $datas]);
    }

    public function details($id){
        $datas = Regentries::all()->where('id',$id);
        return view('details', ['datas'=>$datas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createentries()
    {
        Regentries::create([
            'website' => isset($_POST['cbwebsite'])?1:0,
            'advertisement'=> isset($_POST['cbadvertisement'])?1:0,
            'social media'=> isset($_POST['cbsocialmedia'])?1:0,
            'radio'=> isset($_POST['cbradi'])?1:0,
            'television'=> isset($_POST['cbtelevision'])?1:0,
            'print'=> isset($_POST['cbprint'])?1:0,
            'other' => $_POST['ibother'],
            'first name'=>$_POST['first_name'],
            'middle name'=>$_POST['middle_name'],
            'last name'=>$_POST['last_name'],
            'relationship'=> isset($_POST['relation'])?$_POST['relation']:'', 
            'ocuupation'=>$_POST['tboccupation'],
            'company'=>$_POST['tbcompanyname'],
            'contact mobile'=>$_POST['tbcontactmobilephone'],
            'contact email'=>$_POST['tbcontactemailaddress'],
            'home phone'=>$_POST['tbhomephone'],
            'other contact'=>$_POST['tbotherphone'],
            'full name'=>$_POST['tbfullname'],
            'gender'=> isset($_POST['gender'])?$_POST['gender']:'',
            'dob'=>$_POST['tbdob'],
            'age'=>$_POST['tbage'],
            'nationality'=>$_POST['tbnationality'],
            'primary language'=>$_POST['tbprimarylanguage'],
            'secondory language'=>$_POST['tbsecondorylanguage'],
            'previous school'=>$_POST['tbpreviousschool'],
            'current grade'=>$_POST['tbcurrentgrade'],
            'admission year'=>$_POST['tbcurrentyear'],
            'grade to which admission seeking'=>$_POST['tbadmnseeking']
        ]);
        return redirect('/');
    }

    public function delete($id){
        $data = Regentries::where('id', $id)->delete();
        return redirect('/admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regentries  $regentries
     * @return \Illuminate\Http\Response
     */
    public function show(Regentries $regentries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regentries  $regentries
     * @return \Illuminate\Http\Response
     */
    public function edit(Regentries $regentries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regentries  $regentries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regentries $regentries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regentries  $regentries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regentries $regentries)
    {
        //
    }
}
