<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>FSE_Stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
    <br>



<div class="div">

    <!--actionpage eka wenas karanna-->
    <form action="#../sources/save_transfered_stock.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">

            <tr>
                <td style=" width: 150px">
                    Select FSE:
                </td>
                <td style=" width: 250px">
                    <select name="fse_id">
                        <option style=" width: 250px" value="Select FSE" selected ><-----Select FSE-----></option>
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

                <td style=" width: 150px"><input class="bttn" type="submit" value="Find" name="find"></td>
                <td style=" width: 150px"> <input class="bttn" type="submit" name="button" id="button" value="Cancel" onclick="clear()"> </td>
            </tr>
            

                     
               
            
        </table>
            


    </form>
</div>
<br>

</center>
  </body>
</html>