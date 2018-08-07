<html>
	<title>
		Payments Forms
	</title>
<body>
	<style>
	.form{
		border: 2px solid black;
		margin-top: 10%;
	}
	.msg{
		height: 50px;
		padding:20px;
		margin-left: 20px;
		margin-right: 20px;
		font-size: 20px;
		font-weight: bold;
		margin-top: 5px;
	}
	h1{
		text-align: center;
		margin-bottom: 2%;
	}
		input[type=text], input[type=number]{
		width: 100%;
		padding: 0px;
		margin-top:5px;
		border: 2px solid #ccc;
		font-size: 20px;
		color: blue;
		text-align: center;
		margin-left: 1px;
	}
	input[type=submit]{
		width: 20%;
		margin-top: 5%;
		border: 2px solid black;
		padding-left:5px;
		font-size: 25px;
		cursor: pointer;
		border-radius: 5px;
		font-weight: bolder;
		text-align: center;
		color: white;
		background-color: black;
		margin-left: 40%;
	}
	label{
		font-size: 20px;
		font-weight: bold;
	}

	</style>

</body>
<div class="form">
<form id='pay' action='pay.php' method='POST'>
<h1> Payments Form </h1>
<table style="width: 100%;">
<tr>
<td><label>Name:</label></td>
<td><input type="text" name="name"  maxlength="50" required=""></td>
<td><label>Middle Name:</label></td>
<td><input type="text" name="mname" maxlength="50" required=""></td>
</tr>
<tr>
<td><label>LastName:</label></td>
<td><input type="text" name="lname"  maxlength="50" required=""></td>
<td><label>Contact:</label></td>
<td><input type="number" name="pnumber" maxlength="50" required=""></td>
</tr>
<tr>
<td><label>Amount:</label></td>
<td><input type="text" name="apaid"  maxlength="50" required=""></td>
<td><label>Payment Type:</label></td>
<td><input type="text" name="grading" maxlength="50" required=""></td>
</tr>
</table>
<div class="msg">
<tr>
<td><label>Message:</label></td>
<td><textarea id="mess" cols="50" rows="10" readonly="">Good Day, Your son/daughter paid 300 pesos for his/her 1st payments. God Bless</textarea></td>
</tr>
</div>
<input type="Submit" name="Submit" value="Submit">
</div>



</form>
</html>