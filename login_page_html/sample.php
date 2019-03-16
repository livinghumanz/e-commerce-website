<?php?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="sample.css">
    <script src="login.js"></script>
 
</head>
<body>
        <div class="container" id="cont">
                <div class="topnav">
                  <a href="#home">Home</a>
                  <a href="#news">News</a>
                  <a href=#signup/login onclick="document.getElementById('id01').style.display='block'" style="width:auto;">&#10098;SignUp/Login&#10099;</a>
                  <a href=#about>About</a>
                </div>    
                <div id="particles-js"> </div>
                <script src="particles.js"></script>
                <script src="app.js"></script>
<!----------------------------LOGIN POPUP ----------------------------------------------------------->
              
                <div id="id01" class="modal">
  
                        <form class="modal-content animate" action="http://localhost/sample/signup.php" method="POST">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <img src="rane-logo.jpeg" alt="RANE TRW" class="avatar">
                          </div>
                      
                          <div class="container1" style="text-align: center;">
                            <center><table cellspacing="10" cellpadding="0">
                           
                            <tr><td><label for="cname" style="padding-right: 10px;"><b>Company name:</b></label></td><td><input type="text" placeholder="Enter Company name" name="cname" id="name" required style="text-align: center;"></td></tr>
                            <tr><td><label for="regno"><b>Reg-No:</b></label></td><td><input type="text" style="text-align: center;" placeholder="Enter Regno" name="regno" required></td></tr>
                            <tr><td><label for= "mail"><b>Mail id:</b></label></td><td><input type="text" placeholder="Enter mail id" name="mail" required></td></tr>
                            <tr><td><label for= "pno"><b>Mobile number:</b></label></td><td><input type="text" placeholder="Enter mobile number" id="pno" name="pno"  onmousemove="validate();" required></td></tr>                    
                            <tr><td><label for= "pwd1"><b>Password:</b></label></td><td><input type="password" placeholder="Enter password" name="pwd1" onmousemove="validate();" onkeypress="validate1();"  id="pwd1" required></td></tr>
                            <tr><td><label for= "pwd2"><b>Repassword:</b></label></td><td><input type="password" placeholder="Repassword" name="pwd2" onkeypress="validate();"  id="pwd2" required></td></tr>
                          </table><br></center>
                          <p id="p1" style="text-align: center; color:red;font-family:'Times New Roman', Times, serif;font-size:16px;font-style:italic;"></p>

                          <center><button type="submit" style="color: darkcyan; font-size: 17px;" onmousemove="validate1();"  >submit</button> or 
                                <a href="#login" onclick="popup1();" style="width:auto; text-decoration: none;">Login</a></center>
                          
                          </div>
                          
                      
                          <div class="container1" style="background-color:#f1f1f1">
                            <button type="button"   class="cancelbtn">Cancel</button>
                          </div>
                        </form>
                </div>
    <!-----------------------------Form 2------------------------------------------------>
    <div id="id02" class="modal">
  
        <form class="modal-content animate" action="http://localhost/sample/login.php" method="POST">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="rane-logo.jpeg" alt="RANE TRW" class="avatar">
          </div>
      
          <div class="container1" style="text-align: center;">
            <center><table cellspacing="10" cellpadding="0">
           
            <tr><td><label for= "mailid"><b>Mail id</b></label></td><td><input type="text" onkeypress="evalidate();" placeholder="Enter mail id" name="mailid"  id="mail" required></td></tr>
            <tr><td><label for= "pwd1"><b>Password</b></label></td><td><input onkeypress="evalidate();" type="password" placeholder="Enter password" name="pwd1"  id="pwd1" required></td></tr>
            </table><br></center>
            <p id="p2" style="text-align: center; color:red;font-family:'Times New Roman', Times, serif;font-size:16px;font-style:italic;"></p>

          <center><button type="submit" style="color: darkcyan; font-size: 17px;" onmouseover="evalidate();"  >Login</button> or 
                <a href="#signup" onclick="popup2();" style="width:auto; text-decoration: none;">Sign up</a></center>
          
          </div>
          
      
          <div class="container1" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#" style="width:auto; text-decoration: none;">password?</a></span>
          </div>
        </form>
</div>
<!----------------------------END------------------------------------------------------->                             
 </div>
<!---------------------------------Email validation form 2 -------------------->
<script>        
  function evalidate() {

    var email = document.getElementById('mail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) 
    {
      document.getElementById("p2").style.color = "red";
      document.getElementById("p2").innerHTML = " &#9760; mail not valid";
    }
    else
    {
      document.getElementById("p2").style.color = "green";
      document.getElementById("p2").innerHTML = " &check; mail is valid"; }
    }
</script>
             
</body>
</html>