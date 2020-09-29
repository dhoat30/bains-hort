<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $company = $_POST['company'];
    $reason = $_POST['reason'];
    $message = $_POST['message']; 
    $errorEmpty = false;
    $errorEmail = false;

    if(empty($name) || empty($email) || empty($phoneNumber) || empty($company) || empty($reason)) {
        echo "<span class='from-error'> Please fill in all fields!</span>";
        $errorEmpty = true; 
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class='from-error'> Please enter a valid e-mail address!</span>";
        $errorEmail = true; 
    }else{
        $mailTo = "info@bainshorticulture.co.nz"; 
        $headers = "From: ".$email; 
        $subject = "Bains Horticulture Website";
        $body = "You have received an email from ".$name.".\n\n"."Company: ".$company.".\n\n"."Reason: ".$reason.".\n\n"."Message: ".$message; 
        mail($mailTo, $subject, $body, $headers);
        echo "<span class='form-success'> Thanks for contacting us. Our team will be getting in touch with you shortly.</span>";
    }

}else{
    echo "There was an error!";
}

?>



<script> 
$("#mail-name, #mail-email, #mail-phone-number, #mail-company").removeClass("input-error")

 var errorEmpty = "<?php echo $errorEmpty;?>";
 var errorEmail = "<?php echo $errorEmail;?>";

if(errorEmpty == true){
    $("#mail-name, #mail-email, #mail-phone-number, #mail-company").addClass("input-error");
}
if(errorEmail == true){
    $(" #mail-email").addClass("input-error");
}
if(errorEmpty == false && errorEmail==false){
    $("#mail-name, #mail-email, #mail-phone-number, #mail-company").val("") ;
}

</script>