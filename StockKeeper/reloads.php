<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Reloads</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<br>


<br>
<div class="h2div" >Reload Summary</div>
<br>

<div class="div">
<br>

    <label> Remaining amount :  </label>
    <label>   5687.45  </label>
			
	

<br>

</div>

<br>
<div class="h2div" >Transfer </div>
<br>

<div class="div">

    <!--actionpage eka wenas karanna-->
    <form action="#../sources/save_transfered_stock.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">

            <tr>
                <td style=" width: 150px">
                    Date:
                </td>
                <td><input type="date" name="date"></td>
            </tr>

            <tr>
                <td style=" width: 150px">
                    Select FSE:
                </td>
                <td>
                    <select name="fse_id">
                        
                        <?php
                            
                            $sql_query2 ="SELECT * FROM user WHERE Type='FSE'";
                            $result=mysql_query($sql_query2);
                            if($result!="")
                            {
                                while ($row = mysql_fetch_array($result))
                                {
                                    echo '<option value="'.$row['Id'].'" >'.$row['Id'].'-'.$row['Name'].'</option>';

                                }
                            }
                        ?>
                    </select>

                </td>
            </tr>
            

            <tr>
                <td style=" width: 150px">
                    Amount:
                </td>
                <td><input type="number" min="0" value="0" step=".01" required name="price" placeholder="Amount of tranfer"  title="only a price value">
                </td>
            </tr>

            

              
               
            <tr>
              <td><input class="bttn" type="submit" value="Transfer" name="transfer"></td>
              <td> <input class="bttn" type="submit" name="button" id="button" value="Cancel" onclick="clear()"> </td>
            </tr>
        </table>
            


    </form>
</div>
<br>

</center>
  </body>
</html>