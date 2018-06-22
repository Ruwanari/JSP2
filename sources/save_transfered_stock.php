<!DOCTYPE html>
<html>
<head>
  <title>save transfered stock</title>
  <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>



<?php
require("../DB/dbcon.php");

if(isset($_POST['transfer']))
	{ //amount variables
		$card_range1 = array();
		$card_range2 = array();
		$card_range3 = array();
		$card_range4 = array();
		$card_range5 = array();
		$card_range6 = array();
		$serial_range1 = "Not transfered";
	 	$serial_range2 = "Not transfered";
		 $serial_range3 = "Not transfered";
	 	$serial_range4 = "Not transfered";
	 	$serial_range5 = "Not transfered";
		 $serial_range6 = "Not transfered";
		$transfered_date = $_POST['date'];
		$transfered_fse_id = $_POST['fse_id'];
		$transfered_amount20 = $_POST['amount20'];
		$transfered_amount50 = $_POST['amount50'];
		$transfered_amount100 = $_POST['amount100'];
		$transfered_amount200 = $_POST['amount200'];
		$transfered_amount500 = $_POST['amount500'];
		$transfered_amount1000 = $_POST['amount1000'];

		$sql_query1 = "select * from  main_stock_deatils where Type=20 limit $transfered_amount20";
		$sql_query2 = "select * from  main_stock_deatils where Type=50 limit $transfered_amount50";
		$sql_query3 = "select * from  main_stock_deatils where Type=100 limit $transfered_amount100";
		$sql_query4 = "select * from  main_stock_deatils where Type=200 limit $transfered_amount200";
		$sql_query5 = "select * from  main_stock_deatils where Type=500 limit $transfered_amount500";
		$sql_query6 = "select * from  main_stock_deatils where Type=1000 limit $transfered_amount1000";

        $result1 = mysql_query($sql_query1);
        $result2 = mysql_query($sql_query2);
        $result3 = mysql_query($sql_query3);
        $result4 = mysql_query($sql_query4);
        $result5 = mysql_query($sql_query5);
        $result6 = mysql_query($sql_query6);

//for 20

  if($transfered_amount20 !=null or $transfered_amount20!=0)
  {
            while ($data = mysql_fetch_array($result1)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query1 = "insert into transferred_stock values
			('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
			 mysql_query($sql_insert_query1);
               
              $sql_delete_query1 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query1);
               array_push($card_range1, $card_Serial);
              
            }

            $serial_range1 = min($card_range1) ." to". max($card_range1);
            
    }


//for 50
    if ($transfered_amount50!=null or $transfered_amount50!=0) 
    {
    	
             while ($data = mysql_fetch_array($result2)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query2 = "insert into transferred_stock values
			('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
			 mysql_query($sql_insert_query2);
               
			$sql_delete_query2 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query2);

               array_push($card_range2, $card_Serial);
              
            }


            $serial_range2 = min($card_range2) ." to". max($card_range2);

		

	}

//for 100
	if ($transfered_amount100!=null or $transfered_amount100!=0) 
	{

             while ($data = mysql_fetch_array($result3)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query3 = "insert into transferred_stock values
			('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
			 mysql_query($sql_insert_query3);
               
			$sql_delete_query3 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query3);
               array_push($card_range3, $card_Serial);
              
            }


            $serial_range3 = min($card_range3) ." to". max($card_range3);

			
	}

//for 200
	if ($transfered_amount200!=null or $transfered_amount200!=0) 
	{
		
             while ($data = mysql_fetch_array($result4)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query4 = "insert into transferred_stock values
			('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
			 mysql_query($sql_insert_query4);
               
               $sql_delete_query4 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query4);

               array_push($card_range4, $card_Serial);
              
            }


            $serial_range4 = min($card_range4) ." to". max($card_range4);

	}

//for 500
	if ($transfered_amount500!=null or $transfered_amount500!=0) 
	{
		
             while ($data = mysql_fetch_array($result5)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
               

               $sql_insert_query5 = "insert into transferred_stock values
			('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
			 mysql_query($sql_insert_query5);
               
               $sql_delete_query5 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query5);

               array_push($card_range5, $card_Serial);
              
            }


            $serial_range5 = min($card_range5) ." to". max($card_range5);

			 
	}

//for 1000
    if ($transfered_amount1000!=null or $transfered_amount1000!=0) 
    {
          
             while ($data = mysql_fetch_array($result6)) 
            {
                $card_Type = $data['Type'];
                $card_Serial = $data['Serial'];
              

              //Insert details in to  transferred_stock

               $sql_insert_query6 = "insert into transferred_stock values
			('$transfered_date','$card_Type','$card_Serial','$transfered_fse_id')";
			 mysql_query($sql_insert_query6);
               
               //delete details from main_stock_deatils table
			 $sql_delete_query6 = "delete from main_stock_deatils where Serial = $card_Serial";
             mysql_query($sql_delete_query6);

             //push card serial in to array to find the range
               array_push($card_range6, $card_Serial);
              
            }


            $serial_range6 = min($card_range6) ." to". max($card_range6);

			
	}

	//echo $serial_range1;
	//echo $serial_range2;
	//echo $serial_range3;
	//echo $serial_range4;
	//echo $serial_range5;
	//echo $serial_range6;

echo "<br>";
echo"<div class='h2div' >Report of the transaction</div>";
echo"<br>";

echo"<div class='div'>";
echo"<br>";
  

	echo "<center><table class='normaltable'>
    <tr>
      <td>Date</td>
      <td colspan='2'>".$transfered_date."</td>     

    </tr>
    <tr>
      <td>FSE ID</td>
      <td colspan='2'>".$transfered_fse_id."</td>     

    </tr>
    </table></center>";

echo"<br>";

    echo "<center><table class='normaltable'>

    <tr>
      <th>Card Type</th>
      <th>Range</th>
      <th>Amount</th>
    </tr>
		<tr>
			<td>Rs.20 cards</td>
			<td>".$serial_range1."</td>
			<td>".$transfered_amount20."</td>
		</tr>
    <tr>
      <td>Rs.50 cards</td>
      <td>".$serial_range2."</td>
      <td>".$transfered_amount50."</td>
    </tr>
    <tr>
      <td>Rs.100 cards</td>
      <td>".$serial_range3."</td>
      <td>".$transfered_amount100."</td>
    </tr>
    <tr>
      <td>Rs.200 cards</td>
      <td>".$serial_range4."</td>
      <td>".$transfered_amount200."</td>
    </tr>
    <tr>
      <td>Rs.500 cards</td>
      <td>".$serial_range5."</td>
      <td>".$transfered_amount500."</td>
    </tr>
    <tr>
      <td>Rs.1000 cards</td>
      <td>".$serial_range6."</td>
      <td>".$transfered_amount1000."</td>
    </tr>
	</table>";

echo"<br>
<button class='bttn'> Back to Home Page</button></center>";

  echo "</div>";



	}
 ?>




</body>
</html>