<!DOCTYPE html>

<?php
include_once("MySQLi.php");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // checking empty fields
    if (empty($name) || empty($description)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($description)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }
    } else {
        //adding the to the table
        $result = mysqli_query($mysqli, "INSERT INTO crud(name, description) VALUES('$name','$description')");

        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="display-1"> Add </div>
    </div>

    <form method="post" action="add.php">
        <div class="mb-3 px-2 display-6">
            <label for="Nombre" class="form-label">Name</label>
            <input name="name" class="form-control" type="text" placeholder="Carlos" aria-label="default input example">
        </div>

        <div class="mb-3 px-2 display-6">
            <label for="FDescripcion" class="form-label">Description</label>
            <input name="description" class="form-control" type="text" placeholder="Profesor de la materia"
                aria-label="default input example">
        </div>


        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
                </div>
                <div class="col">

                </div>

                <div class="col">
                    <button class="btn btn-dark" type="submit" name="add" value="Add">Add</button>
                </div>
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>