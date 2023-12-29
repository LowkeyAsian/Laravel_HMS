<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function addview()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
        return view('admin.add_doctor');
            }
        
        else
        {
            return redirect('login');
        } 
    }
    }


    public function upload(Request $request)
    {
        $doctor= new doctor;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }



    public function showappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
        $data=appointment::all();
        return view('admin.showappointment', compact('data'));
    }
    else{
        return redirect()->back();
    }
}
    else{
        return redirect('login');
    }
}
    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();
        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data=appointment::find($id);

        $data->status='Cancelled';

        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {

        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

public function updatedoctor($id)

{
    $data = doctor::find($id);
    return view('admin.updatedoctor', compact('data'));
}


public function editdoctor(Request $request, $id)
{
$doctor = doctor::find($id);

$doctor->name=$request->name;
$doctor->phone=$request->phone;
$doctor->speciality=$request->speciality;
$doctor->room=$request->room;
$image=$request->file;
if($image){
$imagename=time().'.'.$image->getClientOriginalExtension();

$request->file->move('doctorimage',$imagename);

$doctor->image=$imagename;
}
$doctor->save();
return redirect()->back()->with('messsage','Doctor Details Updated Successfully');
}











}
