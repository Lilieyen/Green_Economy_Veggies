<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];


//This is the first menu screen

if ( $text == "" ) {
  $response  = "CON Hi welcome, I can help you with making your order \n";
  $response .= "1. Enter 1 to continue";
}


// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen

else if ($text == "1") {
  $response  = "CON  Pick a produce \n";
  $response .= "1. Tomatoes \n";
  $response .= "2. Onions \n";
  $response .= "3. Potatoes \n";
  $response .= "4. Carrots \n";
}


//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
  $response = "CON You are about to order tomatoes \n";
  $response .= "Please Enter 1 to confirm \n";
}

else if ($text == "1*1*1") {
  $response = "CON tomatoes cost cost -N- 120.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}

else if ($text == "1*1*1*1") {
  $response = "END Your tomatoes order has been received";
}


else if ($text == "1*1*1*0") {
  $response = "END Your tomatoes order has been cancelled";
}

// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
  $response = "CON You are about to order for onions \n";
  $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
  $response = "CON Table for 4 cost -N- 100.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}
        
else if ($text == "1*2*1*1") {
  $response = "END Your order for onions has been receied";
}
    
else if ($text == "1*2*1*0") {
  $response = "END Your order for onions has been cancelled";
}

// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
  $response = "CON You are about order for Potatoes \n";
  $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
  $response = "CON Table for Potatoes -N- 170.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}

else if ($text == "1*3*1*1") {
  $response = "END Your order for Potatoes has been received";
}
        
else if ($text == "1*3*1*0") {
  $response = "END Your order for Potatoes has been cancelled";
}

// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
  $response = "CON You are about to order for carrots \n";
  $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
  $response = "CON carrots cost -N- 100.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}
                       
else if ($text == "1*4*1*1") {
  $response = "END Your order for carrots has been received";
}
            
else if ($text == "1*4*1*0") {
  $response = "END Your order for carrots has been cancelled";
}


//echo response

header('Content-type: text/plain');
echo $response


?>