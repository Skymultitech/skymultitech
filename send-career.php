<?php
if(isset($_POST['submit']))
{
   
    if($_POST['name']!='' && $_POST['email']!='' && $_POST['contact_no']!='' && $_POST['jobs']!='' )
    {
         
 $sender_name    = $_POST["name"]; //sender name 
    $from = $_POST["email"]; //sender email, it will be used in "reply-to" header 
    $mobile        = $_POST["contact_no"]; //subject for the email 
    $job        = $_POST["jobs"];
 
// Recipient 
$to = 'pankaj.acet.1994@gmail.com'; 
 
// Sender 

$fromName = $sender_name; 
 
// Email subject 
$subject = "Application received from ".$sender_name;
 
 $tmp_file = $_FILES['resume']['tmp_name'];
        $ext = pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION);
        $rand = md5(uniqid().rand());
        $post_image = $rand.".".$ext;
        move_uploaded_file($tmp_file,"uploads/".$post_image);
// Attachment file 
// $file = "uploads/1.jpg"; 
 $file='uploads/'.$post_image;
// Email body content 
$htmlContent = ' 
    <p>Name:'.$sender_name.'</p> 
    <p>Email:'.$from.'</p> 
    <p>Mobile NO.:'.$mobile.'</p> 
    <p>Applied for:'.$job.'</p> 
'; 
 
// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  
 
// Email sending status 
echo $mail?"<script>alert('Email Sent Successfully!');location='career.php'</script>":"<script>alert('Email Sending failed!');location='career.php'</script>"; 

}
else
{
    echo "<script>alert('all field are mandatory'); window.location='career.php'</script>";
}
}
else
{
    echo "<script>window.location='career.php'</script>";
}
?>