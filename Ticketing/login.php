<?php
session_start();
require_once("control.php");
?>
<h1> PLEASE FILL APPROPRIATELY </h1>
<p></p>
<form action="login.php" method="post">

<div>
<table width="50%">

	<tr>
		<td><label>TITLE</label></td>
	 		<td >
	 		<input type="radio" value="Mr" name="tt"/>Mr. 
			<input type="radio" value="Mrs" name="tt"/>Mrs. 
			<input type="radio" value="Miss" name="tt"/>Miss
		</td>
		
	</tr>

    <tr>
    	<td><label>FULL NAME</label></td>
        <td><input type="text" name="fn"></td>
    </tr>	

    <tr>
    	<td><label>GENDER</label></td>
    	<td>
    		<input type="radio" value="male" name="gender"/>MALE
    		<input type="radio" value="female" name="gender"/>FEMALE
    	</td>
    </tr>

    <tr>
    	<td><label>PHONE NUMBER</label></td>
    	<td><input type="number" name="pn"></td>
    </tr>

    <tr>
    	<td><label>EMAIL ADDRESS</label></td>
    	<td><input type="email" name="email"></td>
    </tr>

    <tr>
    	<td><label>DATE OF BIRTH</label></td>
		<td><input type="date" name="date"></td>
    </tr>

    <tr>
    	<td><label>NEXT OF KIN</label></td>
    	<td><input type="text" name="nk"></td>
    </tr>
    		
    <tr>
    	<td><label>NEXT OF KIN'S PHONE NUMBER</label></td>
    	<td><input type="number" name="nkp"></td>
    </tr>

    <tr>
    	<td><label>CONVENIENCE</label></td>
    	<td><input type="radio" value="ac" name="conv"/>AC
    	<input type="radio" value="nonac" name="conv"/>NONAC
    	</td>
    </tr>

    <tr>
    <td><label>FROM</label></td>
    <td>
    	<select name="locate" id="locate">
    	<option value="UYO">UYO</option>
		<option value="LAGOS">LAGOS</option>
		<option value="OWERRI">OWERRI</option>
		<option value="ABUJA">ABUJA</option>
		<option value="CALABAR">CALABAR</option>
		<option value="PORT HARCOURT">PORT HARCOURT</option>
	</select>
    </td>
	</tr>

    <tr>
    	<td><label>TO</label></td>
    	<td>
    		<select name="dest" id="dest">
			<option value="UYO">UYO</option>
			<option value="LAGOS">LAGOS</option>
			<option value="OWERRI">OWERRI</option>
			<option value="ABUJA">ABUJA</option>
			<option value="CALABAR">CALABAR</option>
			<option value="PORT HARCOURT">PORT HARCOURT</option>
			</select>
	</td>
    </tr>
    
    <tr>
    	<?php
		$tick->databaseinsert();
		?>
    	<td><input type="submit" name="print" value="PROCEED"></td>
    </tr>
</table>

</form>
