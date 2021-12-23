<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
   
    <br>

    
        <h2>Dashboard</h4><br>
        <h3>welcome, {{session('email')}}</h3><br>
        <div ><h4 style="color:red;">
               {{ session('status') }}
             </div></h4>
        <div><h3>employee details<h3> </div>
</div>
           
            <h4><a href="/list">List</a></h4>&nbsp;&nbsp;&nbsp;
            <h4><a href="/logout">Logout</a></h4>&nbsp;&nbsp;&nbsp;
</div>
</body>
</html>