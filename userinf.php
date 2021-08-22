<?php
$con = mysqli_connect('localhost' ,'root');
if($con){
    echo "connection successful";
}else{
    echo "sorry";

}
mysqli_select_db($con, 'vpks');
 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $comment = $_POST['comment'];

 $query = insert into userinfodata (user, email, mobile,comment)
 values ('$user', '$email', '$mobile','$comment')
 echo "$query";

 ?>