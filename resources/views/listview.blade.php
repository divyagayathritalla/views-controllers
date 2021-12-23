
<?php
use App\Models\employee;
$employer=employee::all();
?>
<!DOCTYPE html>
<html>
<head>
 
</head>
  
<body>
<h2><a href="/dashboardform"><center>Go to DashBoard</center></a></h2>
<h1>employee details</h1>
<table border="1">
  <tr>
  <th>ID</th>
    <th>Email</th>
    <th>Password</th>
    <th>created_at</th>
    <th>updated_at</th>
</tr>
@foreach($employer as $member)
<tr>
  <td>{{$member->id}}</td>
  <td>{{$member->Email}}</td>
  <td>{{$member->Password}}</td>
  <td>{{$member->created_at}}</td>
  <td>{{$member->updated_at}}</td>
</tr>
@endforeach
</table>
</body>
</html>