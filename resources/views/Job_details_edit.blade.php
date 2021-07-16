<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Details</title>
</head>
<body>
        <div class="">
            <header>
                <h1> Edit Job Details </h1>
            </header>
        </div>
        
        <form action ='/{{  $job_detail->id }}/job_details_update' method="POST">
            @csrf  
            
        <div> 
            <label>Category  </label>
            <select name="category" id="category" > <--style="margin-left:4.5em"-->
                <option selected> {{ $categogry_selected  }}</option >
                    @foreach($categories as $categories)
                    <option value="{{ $categories->id }}" >
                        {{ $categories->name }}
                    @endforeach
            </select>
        </div>
        <br>
        <div> 
            <label>Title</label>
             <input type="text" class="" name="title" value="{{ $job_detail->title }}" >
        </div>
        <br>
        <div> 
            <label>Opeanings</label>
             <input type="text" class="" name="opeanings" value="{{ $job_detail->no_of_opeanings }}">
        </div>
        <br>
        <div> 
            <label>Position Type</label>
            <input type="text" class="" name="position_type" value="{{ $job_detail->position_type }}">
        </div>
        <br>
        <div> 
            <label>Experience</label>
            <input type="text" class="" name="experience" value="{{ $job_detail->experience }}">
        </div>
        <br>
        <div> 
            <label>Education</label>
            <input type="text" class="" name="education" value="{{ $job_detail->education }}">
        </div>
        <br>
        <div> 
            <label>Posted Date</label>
             <input type="date" class="" name="posted_date" value="{{ $job_detail->posted_date }}">
        </div>
        <br>
        <div> 
            <label>Apply Before</label>
            <input type="date" class="" name="apply_before" value="{{ $job_detail->apply_before }}">
        </div>
        <br>
        <div> 
            <label>City</label>
            <select name="city" id="city" > 
                <option selected>{{ $city_selected }}</option >
                    @foreach($city as $city)
                    <option value="{{ $city->id }}" >
                        {{ $city->name }}
                    @endforeach
            </select>
        </div>
        <br>
        <div> 
            <label>Location</label>
            <input type="text" class="" name="location" value="{{ $job_detail->location }}">
        </div>
        <br>
        <div> 
            <label>Short Description</label>
            <input type="textarea" class="" name="short_description" value="{{ $job_detail->short_description }}">
        </div>
        <br>
        <div> 
            <label>Long Description</label>
            <input type="textarea" class="" name="long_description" value="{{ $job_detail->long_description }}">
        </div>
        <br>
        <div >
            <button class="" > Update </button>  
        </div>

        </form>

</body>
</html>