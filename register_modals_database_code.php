<?php
$show_alert = false;
$show_error = false;

?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];
        $Cpassword = $_POST["Cpassword"];
        $Address = $_POST["Address"];
        $City = $_POST["City"];
        $State = $_POST["State"];
        $Pincode = $_POST["Pincode"];
        $PreferredCity = $_POST["PreferredCity"];
        $Contact = $_POST["Contact"];
        if ($Email != null && $Password != null && $Password== $Cpassword && $City!=null && $State!=null && $PreferredCity!=null && $Contact!=null) {

            $sql = "INSERT INTO `users_table` (`Email`, `Password`, `Cpassword`, `Address`, `City`, `State`, `Pincode`, `PreferredCity`, `Contact`) VALUES ('$Email', '$Password', '$Cpassword', '$Address', '$City', '$State', '$Pincode', '$PreferredCity', '$Contact')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $show_alert = true;
            } else {
                $show_error = true;
            }
        }
        else{
            $show_error = true;
        }
    }






    ?>
    <?php
    if ($show_alert) {
        echo '<div  id="registersuccess" class="alert alert-success  my-3 alert-dismissible fade show" role="alert">
<h4 class="alert-heading">Registered Successfully!</h4>
<p>Thanku for Submitting your Details, We will contact you soon. Please keep checking Your email for further updates and to receive Best Deals sent By us..</p>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    if ($show_error) {

        echo '<div id="registererror" class="alert alert-danger " role="alert">
<strong>Error!!</strong>  Please Fill All The Mandatory Fields (Email, Password, City, State, Preferred City and Contact No), And Make sure that You have filled the same password in Confirm pawssword box.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    ?>
