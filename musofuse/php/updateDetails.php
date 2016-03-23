<?php
session_start();
?>
<?php
echo    "<div id='openModal3' class ='addArtistDialog'>";     
echo        "<div>";
echo		"<a href='#close' title='Close' class='close'>X</a>";
echo		"<h2>Update Artist's Details</h2>";
echo		"<form id='addartist' name='addartist' method='post' action='php/addartistprocess.php' enctype='multipart/form-data'>";
echo        "<label class='nameLabel' for='name'>Artist Name *    </label>";
echo        "<input name='name' class='name' type='text' id='name' value='$row[name]'><br>";
echo        "<label class='summarylabel' for='summary'>Summary *<br></label>";
echo        "<textarea name='summary' rows='3' cols='48' id='summary' >$row[summary]</textarea><br>";
echo        "<label for='details'>Details *</label><br>";
echo        "<textarea name='details' rows='3' cols='48' id='details' >$row[details]</textarea><br>";
echo    "<table style='width:1'>";
echo    "<tr>";
echo        "<td><label class='webpageLabel' for='webpage'>Webpage URL</label></td>";
echo        "<td><input name='webpage' class='webpage' type='text' id='webpage' value='$row[webpage]'></td>";
echo "</tr>";
echo    "<tr>";
echo        "<td><label class='emailLabel' for='email'>Email Address   </label></td>";
echo        "<td><input name='email' class='email' type='email' id='email' value='$row[email]'></td>";
echo "</tr>";
echo    "<tr>";
echo        "<td><label class='phoneLabel' for='phone'>Phone Number   </label></td>";
echo        "<td><input name='phone' class='phone' type='tel' id='phone' value='$row[phone]'></td>";
echo "</tr>";
echo    "<tr>";
echo        "<td><label class='mobileLabel' for='moblie'>Mobile Number   </label></td>";
echo        "<td><input name='mobile' class='mobile' type='tel' id='mobile' value='$row[mobile]'></td>";
echo "</tr>";
echo    "<tr>";
echo        "<td><label class='faxLabel' for='fax'>Fax Number    </label></td>";
echo        "<td><input name='fax' class='fax' type='tel' id='fax' value='$row[fax]'></td>";
echo "</tr>";
echo    "</table>";

echo            "<input name='id' type='hidden' value='$_GET[rowid]'/>";
echo            "<input name= 'submit' class='submit' type='submit' value='Update Artist' >";      
echo            "<input type='submit' name='submit' value='Delete Artist' class='deleteButton'>";
echo            "</form>";  
?>