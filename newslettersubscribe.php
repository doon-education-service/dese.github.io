

<?php

$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection Successfull";
}
else {"no Connection";
}


mysqli_select_db($conn, 'suscribestoournewletter');


$email = $_POST['email'];


$query = " insert into neslettersubscribe ( email )
values ('$email') ";

echo "$query";





mysqli_query($conn, $query);


header('location:web.php');

?>