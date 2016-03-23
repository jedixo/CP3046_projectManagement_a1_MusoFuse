<?php
session_start();

echo    "<div id='openModal2' class ='addArtistDialog'>";     
echo        "<div>";
echo		  "<a href='#close' title='Close' class='close'>X</a>";
echo		  "<h2>Add New Artist</h2>";
echo		  "<form id='addartist' name='addartist' method='post' action='php/addartistprocess.php' enctype='multipart/form-data'>";
echo            "<label class='nameLabel' for='name'>Artist Name *    </label>";
echo            "<input name='name' class='name' type='text' id='name' placeholder='Artist Name' required><br>";
echo            "<label class='summarylabel' for='summary'>Summary *<br></label>";
echo            "<textarea name='summary' rows='3' cols='48' id='summary' ></textarea><br>";
echo            "<label for='details'>Details *</label><br>";
echo            "<textarea name='details' rows='3' cols='48' id='details' ></textarea><br>";
echo            "<table style='width:1'>";
echo                "<tr>";
echo                    "<td><label class='webpageLabel' for='webpage'>Webpage URL</label></td>";
echo                    "<td><input name='webpage' class='webpage' type='text' id='webpage' placeholder='http://...com'></td>";
echo                "</tr>";
echo                "<tr>";
echo                    "<td><label class='emailLabel' for='email'>Email Address   </label></td>";
echo                    "<td><input name='email' class='email' type='email' id='email' placeholder='...@....com'></td>";
echo                "</tr>";
echo                "<tr>";
echo                    "<td><label class='phoneLabel' for='phone'>Phone Number   </label></td>";
echo                    "<td><input name='phone' class='phone' type='tel' id='phone' placeholder='0749.....'></td>";
echo                "</tr>";
echo                "<tr>";
echo                    "<td><label class='mobileLabel' for='moblie'>Mobile Number   </label></td>";
echo                    "<td><input name='mobile' class='mobile' type='tel' id='mobile' placeholder='04.......'></td>";
echo                "</tr>";
echo                "<tr>";
echo                    "<td><label class='faxLabel' for='fax'>Fax Number    </label></td>";
echo                    "<td><input name='fax' class='fax' type='tel' id='fax' placeholder='0749.....'></td>";
echo                "</tr>";
echo                "<tr>";
echo                    "<td><label for='file'>Photo *</label></td>";
echo                    "<td> <input type='file' name='imagefile' id='imagefile' required/> </td>";
echo                "</tr>";
echo            "</table>";
echo            "<input name= 'submit' class='submit' type='submit' value='Add Artist' >";            
echo         "</form>";  

?>
    </div>
</div>