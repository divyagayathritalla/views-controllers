<html>
    <head>
    <link rel="stylesheet"  href="css/style.css" />
    </head>
    <body>
        <div>
          
            <h2>Login here</h2>

            <form method="POST" action="dashboard">
                @csrf
              <p><input type="email" name="email" placeholder="Email"></p>
              <h5 style="color:red;">@error('email')
                {{$message}}
               @enderror</h5>
              <p><input type="password" name="password" placeholder="Password"></p>
              <h4 style="color:red;">@error('password')
                {{$message}}
               @enderror</h4>
              <p><input type="submit" value="loginn"></p>
              <div ><h5 style="color:red;">
               {{ session('status') }}
             </div></h5>
              <h4>not a member?<a href="/registerform">Register Here</a></h4>
            </form>
          </div>
    </body>
</html>