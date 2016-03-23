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
?>

<div id='addUser' class ='addArtistDialog'>     
    <div>
        <a href='#close' title='Close' class='close'>X</a>
        <h2>Membership Registration</h2>



<section class="members-registration-form">
    <h2 style="display:none;">Membership Registration</h2>
<form method="post" action="php/registerUser.php" id="registration">
    <table class="add-user-table">
   	    <tr>
            <td class="label-right"><label for="name">*Name:</label></td>
            <td class="label-left"><input type="text" name="name" placeholder="Your name here" id="name" required/></td>
        </tr>
        <tr>
            <td class="label-right"><label for="address">*Postal Address: </label></td>
            <td class="label-left"><textarea name="address" id="address" cols="40" rows="4" form="registration" ></textarea></td>
        </tr>
        <tr>
            <td class="label-right"><label for="number">*Phone Number: </label></td>
            <td class="label-left"><input type="number" name="number" placeholder="Phone Number" id="number" required /></td>
        </tr>
        <tr>
            <td class="label-right"><label for="email">*Email Address: </label></td>
            <td class="label-left"><input type="email" name="email" placeholder="example@gmail.com" id="email" required/></td>
        </tr>
        <tr>
            <td class="label-right"><label for="password">*Password: </label></td>
            <td class="label-left"><input type="password" name="password" placeholder="*********" id="password_reg" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}"/></td>
        </tr>
        <tr>
            <td id="password-explanation">*Password must be greater than 8 characters, have a mix of uppercase and lower case and cannot contain spaces.</td>
        </tr>
        <tr>
            <td class="label-right"><label for="comments">We value your comments and suggestions: </label> </td>
            <td class="label-left"><textarea name="comments" id="comments" cols="40" rows="4" form="registration"></textarea></td>
        </tr>
        <tr>
            <td class="label-right"><label for="terms">*I have read and agree to the Membership Guidelines</label> </td>
            <td class="label-left"><input type="checkbox" name="terms" id="terms" required/></td>
        </tr>
        <tr>
            <td></td>
            <td class="label-left"><input type="submit" value="Submit" class="add-user-button" /></td>
        </tr>    
    </table>
</form>
</section>


    
    <section class="payment-options">
        <h2 style="display:none">Payment Options</h2>
    <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ" />
                    <input type="image" src="images/pp-logo-110px.png" name="submit" alt="PayPal � The safer, easier way to pay online." />
                    <img alt="" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
                     Individual membership $25 per year:  
                    </form>
                    
    </div>
    <br>
                    <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L" />
                    <input type="image" src="images/pp-logo-110px.png" name="submit" alt="PayPal � The safer, easier way to pay online." />
                    <img alt="" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
                                       &nbsp;&nbsp;&nbsp;Tax-deductible donation:  
                    </form>
                   </div>
                    </section>
            </div>
</div>
