<?php
  
  $dbhost  = 'localhost';    // Unlikely to require changing
  $dbname  = 'socialmedia';   // Modify these...
  $dbuser  = 'root';   // ...variables according
  $dbpass  = 'mysql';   // ...to your installation
  $appname = "Social Media"; // ...and preference

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
  }

  function destroySession()
  {
    $_SESSION = array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

  function showProfile($user) {
    if (file_exists("user_images/$user.jpg"))
      echo "<img src='user_images/$user.jpg''>";

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
       echo "<div class = 'mainText'> <p>";
      echo stripslashes($row['text']);
    }
  }
?>
