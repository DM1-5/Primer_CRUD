<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <div class="display-1"> CRUD </div>
    </div>
    <?php
    include("MySQLi.php");
    $result = mysqli_query($mysqli, "SELECT * FROM crud");
    ?>

    <table class=" mx-1 table table-hover ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $res['id'] . "</td>";
                echo "<td>" . $res['name'] . "</td>";
                echo "<td>" . $res['description'] . "</td>";
                //echo "<td>" . "<a href='edit.php?id=$res[id]'>Edit</a>" . "</td>";
                echo "<td>" . "<a class='btn btn-outline-dark' href='edit.php?id=$res[id]' role='button'>Edit</a>" . "</td>";
                //echo "<td>" . "<a href='delete.php?id=$res[id]'>Delete</a>" . "</td>";
                echo "<td>" . "<a class='btn btn-outline-danger' href='delete.php?id=$res[id]' role='button'>Delete</a>" . "</td>";
            } ?>


        </tbody>
    </table>


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a class="btn btn-danger" href="delete_all.php" role="button">Delete all</a>
            </div>
            <div class="col">

            </div>
            <div class="col">
                <a class="btn btn-dark" href="add.php" role="button">Add</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

<footer>
    <div class="container text-center ">
        <div class="display-6 my-5 me"> Made by <a href="https://github.com/DM1-5">DM1-5</a>
        </div>
</footer>

</html>