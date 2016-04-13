<?php

try {
    $dbh = new PDO("sqlite:db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}



$sql = "SELECT * FROM bullitens WHERE name = '$_GET[name]'";
foreach ($dbh->query($sql) as $row) {


?>

     <div id='editbulletin' class ='modalDialog'>     
         <div>
 		  <a href='#close' title='Close' class='close'>X</a>
 		  <h2>Edit Bulliten</h2>
 		  <form id='addartist' name='addartist' method='post' action='php/bulletprocess.php' enctype='multipart/form-data'>
             <label class='nameLabel' for='name'>Name    </label>
             <input name='name' class='name' type='text' id='name' value='<?php echo "$_GET[name]"; ?>' required><br>
             <label for='details'>Details *</label><br>
             <textarea name='details' rows='3' cols='48' id='details' ><?php echo "$row[details]"; ?></textarea><br>
             <table style='width:1'>
                 <tr>
                     <td><label class='webpageLabel' for='webpage'>Webpage URL</label></td>
                     <td><input name='webpage' class='webpage' type='text' id='webpage' value='<?php echo "$row[link]"; ?>'</input></td>
                 </tr>
                 <tr>
                     <td><label class='webpageLabel' for='email'>Email</label></td>
                     <td><input name='email' class='email' type='email' id='email'value='<?php echo "$row[email]"; ?>'></td>
                 </tr>
                 <tr>
                     <td><label class='webpageLabel' for='number'>phone number</label></td>
                     <td><input name='number' class='number' type='number' id='number' value='<?php echo "$row[number]"; ?>'></td>
                 </tr>
                 <tr>
                     <td><label class='webpageLabel' for='expire'>expire (YYYY-MM-DD): </label></td>
                     <td><input name='expire' class='expire' type='expire' id='expire' value='<?php echo date("Y-m-d",$row[expire]); ?>' required> </td> </tr>
             </table>
             <input name= 'submit' class='submit' type='submit' value='Update bulletin' >
              <input name= 'submit' class='submit' type='submit' value='Delete bulletin' > 
          </form>  

    </div>
</div>
<?php 
                                    }
                                         ?>