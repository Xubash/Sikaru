<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\company_name;
use App\Models\job_detail;
use App\Models\city;
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
        $city = city::all();
        // dd($city);
        return view('Job_Details',[
            'categories' => $categories,
            'city' => $city
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
            'fk_category'=>$request -> input('category'),
            'title'=>$request -> input('title'),
            'no_of_opeanings'=> $request -> input('opeanings'),
            'position_type'=> $request -> input('position_type'),
            'education'=> $request -> input('education'),
            'experience'=> $request -> input('experience'),
            'posted_date'=> $request -> input('posted_date'),
            'deadline'=> $request -> input('apply_before'),
            'short_description'=> $request -> input('short_description'),
            'long_description'=> $request -> input('long_description'),
            'fk_city'=> $request -> input('city'),
            'location'=> $request -> input('location'),

        ]);
        //  dd($request->input('city'));
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
        $city = city::all();

        $categogry_selected = \DB::table('job_details')
        ->join('categories','job_details.fk_category','=','categories.id')
        ->where('job_details.id', $id)->get('categories.name');

        $city_selected = \DB::table('job_details')
        ->join('cities','job_details.fk_city','=','cities.id')
        ->where('job_details.id', $id)->get('cities.name');
        // dd($city_selected);
        dd($categogry_selected);
        $job_detail =job_detail::find($id);
        return view('job_details_edit',[
            'categories' => $categories,
            'city' =>$city,
            'city_selected'=>$city_selected,
            'categogry_selected'=>$categogry_selected

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