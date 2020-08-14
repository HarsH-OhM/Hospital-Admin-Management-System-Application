<!DOCTPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>View Student Records</title>
</head>

<style>
.heading{
    background-color:red;
}

.values{
    background-color:lightblue;
}

</style>
<body>

<h1>Patient Details</h1>
<table border = "1">
<tr class="heading">
<td >Id</td>
<td>Name</td>
<td>Phone</td>
<td>AppointmentId</td>
<td>Date</td>
<td>Email</td>
<td>ReasonOfVisit</td>
<td>Note</td>
</tr>
@foreach ($users as $user)
<tr class="values">
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->appointmentId}}</td>
<td>{{ $user->date }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->reason }}</td>
<td>{{ $user->note }}</td>

</tr>
@endforeach
</table>
</body>
</html>