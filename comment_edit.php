
<html>


<head>
<style>

   .text2{


width:670px;;
height:50px;
margin-top:0px;
margin-left:0px;
resize:none;


}




</style>
</head>
<body>

<?php











        print_r($_POST);

    $comment = $_POST["comment"];

    $IDcomment = $_POST["IDcomment"];



    $userID = $_POST["userID"];


    $time = $_POST["time"];





echo '
<form method="POST" action = "index.php?page=comment_function.php" class="edit">
<input type="hidden" name="IDcomment" value="'.$IDcomment.'">
<input type="hidden" name="userID" value="'.$userID.'">
<input type="hidden" name="time" value="'.$time.'">
<textarea name="comment" class="text2"> '.$comment.'</textarea>
<input type="submit" name="btn_edit" class="button_black" value="edit">
</form>
';


?>
</body>
</html>








