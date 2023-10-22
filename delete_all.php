<?php
include_once("MySQLi.php");
if (isset($_POST['delete'])) {
    $result = mysqli_query($mysqli, "TRUNCATE TABLE crud");
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Delete ALL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="display-1"> ¿Are you sure? </div>
    </div>

    <form action="delete_all.php" method="post">

        <div class="container text-center py-5">
            <div class="row">
                <div class="col">
                    <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <button class="btn btn-success" type="submit" name="delete" value="Delete">Delete All</button>
                </div>
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>