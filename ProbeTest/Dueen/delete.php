
    <?php
    $MYSQL_HOST = "localhost";
    $MYSQL_USER = "root";
    $MYSQL_PW = "";
    $MYSQL_DB = "dueendb";

    $conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
    $userID=@$_POST['user'];
    echo $userID;
    $query = "DELETE FROM user WHERE user.USER_ID=".$userID;
    if ($conn->query($query)) {
      echo $userID;
    }
    else
    {
      echo false;
    }
     ?>
