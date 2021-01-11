<!DOCTYPE html>
<html>
<head>
	<title>Order Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<!--Process Form-->
<?php
	echo "<p><h1>Tasty Dumplings</h1>
                 <h3>641 Norberto Ty Corner Yuchengco Street, Binondo, Manila</h3>
                 <h4>Telephone Number: 02 2425195 / 02 2420231 </h4></p>";

if(isset($_POST['submit']))
{
	$pass = 1;

	if(!isset($_POST['username']) || $_POST['username'] ==  '')
	{
		$pass = 0;
	}
        if(!isset($_POST['no']) || $_POST['no'] ==  '')
	{
		$pass = 0;
	}
        if(!isset($_POST['pay']) || $_POST['pay'] ==  '')
	{
		$pass = 0;
	}
	if(!isset($_POST['gender']) || $_POST['gender'] == '')
	{
		$pass=0;
	}
        if(!isset($_POST['side']) || !is_array($_POST['rice']))
	{
		$pass=0;
	}
	if(!isset($_POST['side']) || !is_array($_POST['rice']))
	{
		$pass=0;
	}
        if(!isset($_POST['bebe']) || !is_array($_POST['bebe']))
	{
		$pass=0;
	}
        if(!isset($_POST['Comments']) || $_POST['Comments'] == '')
	{
		$pass=0;
	}
        if(!isset($_POST['tc']) || $_POST['tc'] == '')
	{
	     $pass=0;
        }
	if($pass)
	{
			printf('<p>Customers Name: %s<br>
                        No. of Guest/s :%s<br>
                        Mode of Payment:%s<br>
			Mode of Eating:	%s<br>
                        Rice Plates: %s<br>
                        Side Dish Order:%s<br>
                        Beverages:%s<br>
			Notes:%s</p>',
			htmlspecialchars($_POST['username']),
                        htmlspecialchars($_POST['no']),
			htmlspecialchars($_POST['pay']),
                        htmlspecialchars($_POST['gender']),
			htmlspecialchars(implode(' ', $_POST['rice'])),
                        htmlspecialchars(implode(' ', $_POST['side'])),
                        htmlspecialchars(implode(' ', $_POST['bebe'])),
			htmlspecialchars($_POST['Comments']));
	}
}

	
?>
<!--Display form-->
<form action="Food.php" method="post">
	<label>Customer's Name :</label>
	<input type ="text" name="username"><br><br>
        <label>No. of Guest/s :</label>
	<input type ="text" name="no"><br><br>
        <label> Mode of Payment:</label>
	<select name="pay">
                <option value="cash">cash </option>
                <option value="cash (Yen (Chinese CUrrency))"> cash (Yen (Chinese CUrrency))  </option>
                <option value="debit/credit card"> debit/credit card  </option>
		
	</select> <br> <br>	

	<label> Mode Of Eating :</label><br>
	<input type ="radio" name="gender" value ="Dine In">Dine In<br>
	<input type ="radio" name="gender" value ="Take Out">Take Out<br>	
        <input type ="radio" name="gender" value ="Delivery">Delivery<br>
        <br><br>	

	<label> Rice plates:</label>
	 <select name= "rice[]" multiple>
                <option value="---"> --- </option>
                <option value="plain rice"> plain rice  </option>
		<option value="pork chop rice"> pork chop rice  </option>
		<option value="hongma rice"> hongma rice</option>
		<option value="spareribs rice">spareribs rice </option>
                <option value="fried meatball rice"> fried meatball rice  </option>
                <option value="fried dumpling rice"> fried dumpling rice </option>
                <option value="chicken leg rice"> chicken leg rice </option>      
                <option value="sweet & sour chicken rice"> sweet & sour chicken</option>
        
	</select> <br> <br>
      
        <label> Side Orders: </label>
        <select name= "side[]" multiple>
                <option value="---"> --- </option>
                <option value="dumplings"> dumplings </option>
               <option value="kuchay dumplings"> kuchay dumplings</option>
                <option value="fried dumplings"> fried dumplingd </option>
               <option value=" fried kuchay dumplings"> fried kuchay dumplings </option>
               <option value="fried meatball"> fried meatball </option>
               <option value="tsay mah pao"> tsay mah pao </option>
               <option value="hongma"> hongma </option>
               <option value=" pork chop"> pork chop </option>
               <option value=" chicken leg"> chicken leg  </option>
               <option value=" spareribs"> spareribs </option>
               <option value=" sweet & sour chicken"> sweet & sour chicken </option>
               <option value="chuanchay"> chuanchay </option>
               <option value="kiamchay"> kiamchay </option>
               <option value=" cabbage"> cabbage </option>
               </select><br><br>

        <label> Beverage: </label>
        <select name= "bebe[]" multiple>
                <option value="---"> --- </option>
                <option value=" mineral water"> mineral water </option>
               <option value="soya milk"> soya milk</option>
                <option value="mango juice"> mango juice </option>
               <option value=" pineapple juice"> pineapple juice </option>
               <option value=" softdrinks (Coca-Cola Pro.)"> softdrinks (Coca-Cola Pro.) </option>
               <option value="Softdrinks (Pepsi Pro.)"> softdrinks (Pepsi Pro.) </option>
               
               </select><br><br>
                

	<label> Notes: </label>
	<textarea name="Comments"> </textarea>
	<input type="checkbox" name="tc" value="ok">This is to certify my order/s<br>
	<input type="submit" name="submit" value="ORDER NOW">
</form>
</body>
</html>	