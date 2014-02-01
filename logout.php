<?php

    require('init.php');
    $s->destroy();

    session_start();

    session_unset();
    session_destroy();

    header("Location:index.php");

    echo "<script>window.location.href='index.php'</script>";
    exit();

?>
