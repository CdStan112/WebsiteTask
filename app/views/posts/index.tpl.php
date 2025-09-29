<?php
require VIEWS . "/parts/header.php";
?>

<body>
    <?php
    require VIEWS . "/parts/fresh_news.php";
    ?>

    <?php
    require VIEWS . "/parts/grid_news.php";
    ?>
    <div class="wrapper">
        <?php
        echo $pagination;
        ?>
    </div>
</body>

<?php
require VIEWS . "/parts/footer.php";
?>

</html>