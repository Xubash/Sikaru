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
                <h1> Job Details </h1>
            </header>
        </div>
        
        <form action ='/' method="POST">
            @csrf  
            
        <div> 
            <label>Category  </label>
            <select name="category" id="category" > <--style="margin-left:4.5em"-->
                <option selected>Choose ....</option >
                    @foreach($categories as $categories)
                    <option value="{{ $categories->id }}" >
                        {{ $categories->name }}
                    @endforeach
            </select>
        </div>
        <br>
        <div> 
            <label>Title</label>
             <input type="text" class="" name="title" >
        </div>
        <br>
        <div> 
            <label>Opeanings</label>
             <input type="text" class="" name="opeanings" >
        </div>
        <br>
        <div> 
            <label>Position Type</label>
            <input type="text" class="" name="position_type" >
        </div>
        <br>
        <div> 
            <label>Experience</label>
            <input type="text" class="" name="experience" >
        </div>
        <br>
        <div> 
            <label>Education</label>
            <input type="text" class="" name="education" >
        </div>
        <br>
        <div> 
            <label>Posted Date</label>
             <input type="date" class="" name="posted_date">
        </div>
        <br>
        <div> 
            <label>Apply Before</label>
            <input type="date" class="" name="apply_before">
        </div>
        <br>
        <div> 
            <label>City</label>
            <select name="city" id="city" > 
                <option selected>Choose ....</option >
                    @foreach($city as $cities)
                    <option value="{{ $cities->id }}" >
                        {{ $cities->name}}
                        @endforeach
                    </option>
                    
            </select>
        </div>
        <br>
        <div> 
            <label>Location</label>
            <input type="text" class="" name="location" >
        </div>
        <br>
        <div> 
            <label>Short Description</label>
            <input type="textarea" class="" name="short_description" >
        </div>
        <br>
        <div> 
            <label>Long Description</label>
            <input type="textarea" class="" name="long_description" >
        </div>
        <br>
        <div >
            <button class="" > Submit </button>  
        </div>

        </form>

</body>
</html>