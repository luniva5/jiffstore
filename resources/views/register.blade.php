<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Register - Jiffstore</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
        <div class="wrapper">
         <div class="title-text">
            <div class="title signup">
               <p>Register</p>
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">
            <form action="register" method="POST" class="signup"><br>
                @csrf
               <div class="field">
                     <input type="text" name="name" placeholder="Full Name" required>
                  </div>
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
        </div> 
    </div>   
    </body>
</html>
            