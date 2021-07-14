<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\company_name;
use App\Models\job_detail;
use App\Models\location;
use App\Models\skill;

class JobDetails_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        $locations = location::all();

        return view('Job_Details',[
            'categories' => $categories,
            'locations' => $locations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input('title'));
        $job_details = job_detail::create([
            'title'=>$request -> input('title'),
            'no_of_opeanings'=> $request -> input('opeanings'),
            'position_type'=> $request -> input('position_type'),
            'experience'=> $request -> input('experience'),
            'experience'=> $request -> input('experience'),
            'posted_date'=> $request -> input('posted_date'),
            'deadline'=> $request -> input('apply_before'),
            'short_description'=> $request -> input('short_description'),
            'long_description'=> $request -> input('long_description'),
            'category'=> $request -> input('category'),

        ]);

        return redirect('job_view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function job_edit($id)
    {    
        $categories = category::all();
        $locations = location::all();

        $job_detail =job_detail::find($id);
        // dd($job_detail);

        return view('job_details_edit',[
            'categories' => $categories,
            'locations' =>$locations,

        ])->with('job_detail' ,$job_detail);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function job_details_update(Request $request, $id)
    {
        $job_detail = job_detail::where('id',$id)
        ->update( [
            'title'=>$request -> input('title'),
            'no_of_opeanings'=> $request -> input('opeanings'),
            'position_type'=> $request -> input('position_type'),
            'experience'=> $request -> input('experience'),
            'experience'=> $request -> input('experience'),
            'posted_date'=> $request -> input('posted_date'),
            'deadline'=> $request -> input('apply_before'),
            'short_description'=> $request -> input('short_description'),
            'long_description'=> $request -> input('long_description')
        ]);

        return redirect('job_view');
    }

    

    public function job_view(){

        $job_details = job_detail::all(); 
       
        return view('job_view',[
           'job_details' => $job_details]);
       
   }


    public function job_delete($id){
        
      $job_detail= job_detail::find($id);
      $job_detail ->delete();
      return redirect('job_view');  
    }

}