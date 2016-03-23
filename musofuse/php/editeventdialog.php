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
$sql = "SELECT * FROM events WHERE name = '$_GET[name]'";
foreach ($dbh->query($sql) as $row) {
$datestr = $row[time];
$timestr = $row[time];
?>

<div id='editEvent' class ='addArtistDialog'>     
    <div>
        <a href='#close' title='Close' class='close'>X</a>
        <h2>Edit Event</h2>
        <form id='addevent' name='addevent' method='post' action='php/editEvent.php' >
			<input type="hidden" name="id" id="id" value='<?php echo "$row[id]"; ?>'/>
            <label class='nameLabel' for='name'>Event Name    </label>
            <input name='name' class='name' type='text' id='name' value='<?php echo "$row[name]"; ?>' required><br>
            <label for='details'>Details:</label><br>
            <textarea name='details' rows='3' cols='48' id='details' ><?php echo "$row[details]"; ?></textarea><br>
            <table style='width:1'>
                <tr>
                    <td><label class='artistlabel' for='artist'>Artist:</label></td>
                    <td><select name='artist' class='artistssel' id='artist'>
						<option value=" " selected>None</option>
                        
<?php
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row2)
{
	if ($row2[id] == $row[artist]) {
    echo                    "<option value='$row2[id]' selected>$row2[name]</option>";
	} else {
		 echo                    "<option value='$row2[id]'>$row2[name]</option>";
	}
		
}
?>
                        
                        </select></td>
                </tr>
                <tr>
                    <td><label class='webpageLabel' for='location'>Location:</label></td>
                    <td><input name='location' class='location' type='text' id='location' value='<?php echo "$row[location]"; ?>' required></td>
                </tr>
                <tr>
                    <td><label class='webpageLabel' for='date'>Date (YYYY-MM-DD): </label></td>
                    <td><input name='date' class='date' type='date' id='date' value='<?php echo "$datestr"; ?>' required> </td>
                </tr>
                <tr>
                    <td><label class='webpageLabel' for='time'>Time (HH:MM AM/PM):</label></td>
                    <td><input name='time' class='time' type='time' id='time' value='<?php echo "$timestr"; ?>' required></td>
                </tr>
            </table>
			<input name= 'submit' class='submit' type='submit' value='Update Event' >  </form>
			<form id='addevent2' name='addevent2' method='post' action='php/editEvent.php' >
				<input type="hidden" name="id" id="id" value='<?php echo "$row[id]"; ?>'/>
			<input name= 'submit' class='submit' type='submit' value='Delete Event ' > 
         </form>  
    </div>
</div>
<?php
									}
?>
