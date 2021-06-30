<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description ?>">
    <title><?= $page_title ?></title>

    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Feuilles de style de l'application -->
    <link rel="stylesheet" href="<?= URL; ?>public/css/style.css">
</head>

<body>

    <?php require_once("views/common/header.php") ?>

    <?php
    if (!empty($_SESSION['alert'])) {
        echo "<div class='alert" . $_SESSION['alert']['type'] . "'role='alert'>" . $_SESSION['alert']['message'] . "</div>";
        unset($_SESSION['alert']);
    }
    ?>



    <?= $page_content; ?>

    <?php require_once("views/common/footer.php") ?>

    <script src="<?= URL; ?>public/js/chrono.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>