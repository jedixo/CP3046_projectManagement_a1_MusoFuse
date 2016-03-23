<?php
//session_start()

try {
    $dbh = new PDO("sqlite:db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

    //event Name / artist id / details / time / location
$id = intval($_GET[name]);
$sql = "SELECT * FROM users WHERE Id = '$id'";
foreach ($dbh->query($sql) as $row) {

?>

<div id='edituser' class ='addArtistDialog'>     
    <div>
        <a href='#close' title='Close' class='close'>X</a>
        <h2>Edit User</h2>
        <form id='addevent' name='addevent' method='post' action='php/edituserprocess.php' >
			<input type="hidden" name="id" id="id" value='<?php echo "$id"; ?>'/>
			
			<table class="add-user-table">
   	    <tr>
            <td class="label-right"><label for="name">*Name:</label></td>
            <td class="label-left"><input type="text" name="name" value='<?php echo "$row[name]"; ?>' id="name" required/></td>
        </tr>
        <tr>
            <td class="label-right"><label for="address">*Postal Address: </label></td>
            <td class="label-left"><textarea name="address" id="address" cols="40" rows="4" form="registration" ><?php echo "$row[address]"; ?></textarea></td>
        </tr>
        <tr>
            <td class="label-right"><label for="number">*Phone Number: </label></td>
            <td class="label-left"><input type="number" name="number" value='<?php echo "$row[number]"; ?>' id="number" required /></td>
        </tr>
        <tr>
            <td class="label-right"><label for="email">*Email Address: </label></td>
            <td class="label-left"><input type="email" name="email" value='<?php echo "$row[username]"; ?>' id="email" required/></td>
        </tr>
				<tr>
            <td class="label-right"><label for="paid">Paid: </label></td>
            <td class="label-left"><input type="number" min="0" max="1" name="paid" value='<?php echo "$row[paid]"; ?>' id="paid" required/></td>
        </tr>
				<tr>
            <td class="label-right"><label for="vol">volunteer: </label></td>
            <td class="label-left"><input type="number" min="0" max="1" name="vol" value='<?php echo "$row[volunteer]"; ?>' id="vol" required/></td>
        </tr>
        
        
    </table>
			
			
			
			
            
			<input name= 'submit' class='submit' type='submit' value='Update User' >  </form>
			<form id='addevent2' name='addevent2' method='post' action='php/edituserprocess.php' >
				<input type="hidden" name="id" id="id" value='<?php echo "$id"; ?>'/>
			<input name= 'submit' class='submit' type='submit' value='Delete User ' > 
         </form>  
    </div>
</div>
<?php
									}
//echo "this works";
?>
