<?php
include_once("MySQLi.php");
$id = $_GET['id'];
if (empty($id)) {
    $id = $_POST['id'];
}

if (isset($_POST['delete'])) {
    $result = mysqli_query($mysqli, "DELETE FROM crud WHERE id=$id");
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="display-1"> ¿Are you sure? </div>
    </div>

    <form action="delete.php" method="post">

        <div class="container text-center py-5">
            <div class="row">
                <div class="col">
                    <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
                </div>
                <div class="col">

                </div>

                <div class="col">
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                    <button class="btn btn-success" type="submit" name="delete" value="Delete">Delete</button>
                </div>
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>