<?php
require("../DB/dbcon.php");

?>
<html lang="en">
  <head>
    <title> Index</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
  <div class="divlarge">

<table id="homepagetable" cellpadding="0" cellspacing="0">
	
	<tr name="header" height= "150px"> <td class="tdmiddle"> <div class="divheader">
         <header>        
         <!include the header file here>
              <table border="0" cellpadding="0" cellspacing="0" height="150px" width="1150px">
                  <tr>
                    <td  width="206px"> <img src="../Images/jsp logo.png" width="205.5px" height="150px"></h1> </td>
                    <td  > <center><FONT face="georgia header" size="65px">JSP Enterprises</FONT></center> </td>
                    <td height="100px" width="150px"><center><img src="../Images/Admin Images/admin.png" height="100px" width="100px"></center></td>
                    <td><h2><?php echo $_SESSION ['userNameInTable']; ?></h2> <br> <h3><?php echo $_SESSION ['userTypeInTable']; ?><br></td>
                    <td><center><input type="submit" value="My Profile" name="myprofile"> </input><br/><br><br>
                    <form action="../sources/loginValidate.php" method="post">
                    <input type="submit" name="logout" value="logout" ></input>
                    </form>
                    </center></td>
                  </tr>
                 
                </table>
                
                          
         </header></div></td></tr>





	<tr name="navigation" height="60px"> <td > 
      <div class="divnavigation">
          <center><table border="0" height="40px" cellspacing="0px" cellspacing="0px">
            <tr>
              <td width=""></td>
              <td> <a  href="home.php" target="abc"><div class="button2 bt2text"> Home</div> </a></td>
              <td> <a  href="db.php" target="abc"><div class="button2 bt2text" >Information</div></a> </td>
              <td> <a  href="users.php" target="abc"><div class="button2 bt2text" >Users</div></a> </td>
            
            </tr>
          </table></center>
      </div></td> </tr>





	<tr name="main" height="560px"> <td> 
            <div class="divmain " >
                  <iframe name="abc" src="home.php" scrolling="auto" class="iframe1">
                    

                  </iframe>    

            </div> </td> </tr>




	<tr name="footer" height="30px"> <td class="tdmiddle"> <div class="divfooter">
            <footer>
            <!include the footer file here>
            Copyright &copy; SmatTID
            </footer>
            </div> </td> </tr>

</table>





  </div>
</center>
  </body>
</html>
