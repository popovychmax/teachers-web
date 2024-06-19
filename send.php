<?php
$to = "ok24.popovych.makcym@gmail.com";
  $subject = "Повідомлення з сайту!";
  $message = "Message";
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["email"])){
        $email     =trim(strip_tags($_POST["email"]));
    }

        $message  .= "Message: ".$_POST["message_text"]."\n";

      mail ($to, $subject, $message, $headers);
      header("Location: index.php");
}
else
{
  exit;
} 
?>