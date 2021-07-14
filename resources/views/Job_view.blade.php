<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Jobs</title>
</head>
<body>
    <div class="">
		<header>
			<h1> Jobs Posted </h1>
		</header>
	</div>
		
	<div class="table">
		<table border="1">
			<thead>
				<tr class="">
                <th colspan=2> Action</th>
                <th>S.N</th>
				<th> Title </th>
				<th> Category </th>
				<th> Posted Date</th>
				<th> Deadline</th>
				<th> No of Opeanings </th>
                
				</tr>
			</thead>
			
			<tbody>
            @foreach($job_details as $job_details)
			<tr>
                <td><a href="/{{ $job_details->id }}/job_edit"> Edit </a></td>
                <td><a href="/{{ $job_details->id }}/job_delete"> Delete </a></td> 
                <td> {{ $job_details->id }}</td>
				<td> {{ $job_details->title }}</td>
				<td> {{ $job_details->position_type  }}</td>
				<td> {{ $job_details->posted_date }}</td>
				<td> {{ $job_details->deadline }}</td>
				<td> {{ $job_details->no_of_opeanings }}</td>
			</tr>
            @endforeach
			</tbody>
		</table>
	</div>
</body>
</html>