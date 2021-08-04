<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=2">  
<title> Login Page </title>  

<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(255, 249, 250);
  width: 30%;  
  margin:auto; 
}

button {   
       background-color: #080808;   
       width: 100%;  
        color: rgb(245, 243, 240);   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 2px;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid rgb(25, 26, 25);   
        box-sizing: border-box;   
        
    }  
 button:hover {   
    text-decoration:none;
            color: inherit;
            background: rgb(235, 241, 235);
            color: rgb(182, 149, 137);  
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;  
         background-color: rgb(255, 255, 255);  
         align-content: center;
         
    }   

    .center{
        padding: 25px;   
        
        background-color: rgb(243, 241, 237);
    }

    
</style>   

<style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: rgb(235, 228, 228);
    }
    
    * {
      box-sizing: border-box;
    }
    
    /* Add padding to containers */
    .container {
      padding: 16px;
      background-color: white;
    }
    
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
    /* Overwrite default styles of hr */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }
    
    /* Set a style for the submit button */
    .registerbtn {
      background-color: #0c0e0d;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
    
    .registerbtn:hover {
      opacity: 1;
    }
    
    /* Add a blue text color to links */
    a {
      color: dodgerblue;
    }
    
    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
      background-color: #f1f1f1;
      text-align: center;
    }
    </style>


</head>    
<body>    
    <form action="connect.php" method="POST"></form>
       
    <center> <h1> Login Form </h1> </center>
         
        <div class="container"> 
        
              
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="button" class="btn btn-default">Login </button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
             <a href="#"> Forgot password? </a>   
        </div>   
    </form> 
    </body>  

<br><br><br>

    <body>
    <form action="/action_page.php">
       <center><h1>Register</h1></center>
        <div class="container">
          
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr>
          
      
          <button type="submit" class="registerbtn">Register</button>
        </div>
        
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </form>
    </body>     
</html>  
