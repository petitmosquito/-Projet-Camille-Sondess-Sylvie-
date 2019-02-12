<ul>
    <li><a href="index.php?page=truc">Truc</a></li>
    <li><a href="index.php?page=machin">Machin</a></li>
    <li><a href="index.php?page=michel">Michel</a></li>
</ul>
<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    echo $page;
}

else {
    echo "Message";
}