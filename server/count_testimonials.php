<?php

    require '../server/database.php';
    $query = "SELECT * FROM testimonials";
    $result = mysqli_query($conn,$query);
    $testimonials = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    echo count($testimonials);
?>