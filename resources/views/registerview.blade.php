<html>
    <head>
    <link rel="stylesheet"  href="css/style.css" />
    </head>
    <body>
        
            

            <h2>Register Here</h2>

            <form method="POST" action="register">
                @csrf
              <p><input type="email" name="email" placeholder="Email"></p><span>   <h5 style="color:red;">@error('email')
                    {{$message}}
              @enderror</h5></span>
           
              <p><input type="password" name="password" placeholder="Password"></p><span>   <h5 style="color:red;">@error('password')
                    {{$message}}
              @enderror</h5></span>
             
              <p><input type="submit" value="Register"></p>

             <div id="alert">
                {{ session('status') }}
             </div>

              <h4 class="login-footer">already a member?<a href="/loginform">LoginHere</a></h4>
            </form>
          
    </body>
</html>