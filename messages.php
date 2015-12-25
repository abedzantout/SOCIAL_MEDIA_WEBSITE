<?php
session_start();
require_once 'header.php';
require_once 'functions.php';

if (isset($_GET['view']))
    $view = sanitizeString($_GET['view']);
else
    $view = $user;

if (isset($_POST['text'])) {
    $text = sanitizeString($_POST['text']);

    if ($text != "") {
        $pm = substr(sanitizeString($_POST['pm']), 0, 1);
        $time = time();
        queryMysql("INSERT INTO messages VALUES(NULL, '$user',
        '$view', '$pm', $time, '$text')");
    }
}

if ($view != "") {
    if ($view == $user)
        $name1 = $name2 = "Your";
    else {
        $name1 = "<a href='members.php?view=$view'>$view</a>'s";
        $name2 = "$view's";
    }
    ?>
    <div class='main'><h3><?= $name1 ?> Messages</h3>


        <div class="container">
            <form method='post' action='messages.php?view=<?= $view ?>'>
                <p>Type here to leave a message:</p>
                <textarea name='text' cols='40' rows='3'></textarea><br>
                <label for="public"><input type='radio' name='pm' id="public" value='0' checked='checked'><span>Public</span></label>
                <label for="private"><input type='radio' name='pm' id="private" value='1'><span>Private</span></label>
                <input type='submit' value='Post Message'></form>
            <div class="messages-container">
                <ul>

                    <?php
                    if (isset($_GET['erase'])) {
                        $erase = sanitizeString($_GET['erase']);
                        queryMysql("DELETE FROM messages WHERE id=$erase AND recip='$user'");
                    }

                    $query = "SELECT * FROM messages WHERE recip='$view' ORDER BY time DESC";
                    $result = queryMysql($query);
                    $num = $result->num_rows;

                    for ($j = 0; $j < $num; ++$j) {

                        $row = $result->fetch_array(MYSQLI_ASSOC);

                        if ($row['pm'] == 0 || $row['auth'] == $user || $row['recip'] == $user) {

                            date_default_timezone_set('Asia/Beirut');
                            ?>

                            <li class = 'messages'><span class='time'>
                                        <?php
                                    echo date('M jS \'y g:ia:', $row['time']);
                                    ?>
                                    </span>
                                    <?php
                                    echo "<a href='messages.php?view=" . $row['auth'] . "'>" . $row['auth'] . "</a> ";

                                    if ($row['pm'] == 0)
                                        echo "wrote: <p>" . $row['message'] . "</p> ";
                                    else
                                        echo "whispered: <p class='whisper'>" .
                                        $row['message'] . "</p> ";

                                    if ($row['recip'] == $user)
                                        echo "<a class='erase' href='messages.php?view=$view" .
                                        "&erase=" . $row['id'] . "'>erase</a></li>";

                                    // echo "<br>";
                                }
                            }
                        }

                        if (!$num)
                            echo "<br><span class='info'>No messages yet</span></div><br><br>";
                        ?>
            </ul> </div>
        <div class='button'><a href='messages.php?view=<?= $view ?>'>Refresh messages</a></div>


    </div>
</div></div></div>

</body>
</html>
