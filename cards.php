<?php
require_once 'include.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>

<body>
    <?php include "navbar.php" ?>
    <?php
    if ((isset($_GET['search']) && ($_GET['search'] == "search")))
    {
        echo '<div class="container-wide">';
    }
    else
    {
        echo '<div class="container">';
    }
    ?>
    <div class="panel">

        <!-- <h1>Cards</h1>
            <p>This is a planned feature that has not been implemented yet...</p>
            <br> -->
        <?php include "widgets/panel-card-search.php" ?>
        <?php include "widgets/panel-card-search-results.php" ?>
        <?php // Stuff that shows if there is no search.
        if (!(isset($_GET['search']) && ($_GET['search'] == "search")))
        {
            include "widgets/panel-most-viewed-cards.php";
            include "widgets/panel-most-votes-cards.php";
            include "widgets/panel-most-viewed-month-cards.php";
            include "widgets/panel-most-votes-month-cards.php";
        }
        ?>

    </div>
    <?php
    if (!(isset($_GET['search']) && ($_GET['search'] == "search")))
    {

        echo '<aside>';
        include "sidebar/sidebar-generic.php";
        echo '</aside>';

    }
    ?>
    </div>
    <?php include "footer.php" ?>
</body>

</html>