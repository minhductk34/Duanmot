<?php

$conn = mysqli_connect("localhost", "root", "", "chat_bot") or die("Database Error");

// getting user message through ajax

$getMesg = mysqli_real_escape_string($conn, $_POST['text']);


$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if(mysqli_num_rows($run_query) > 0){

    $fetch_data = mysqli_fetch_assoc($run_query);

    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "Sorry I can't understand you!";
}
