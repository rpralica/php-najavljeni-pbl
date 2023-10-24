<?php
require "../settings/connection.php";
$id = $_GET['id'];
$sql = "SELECT *FROM najave WHERE id=$id";
$query = mysqli_query($db, $sql);
$result = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Edit Record</title>
</head>

<body></body>
<div class="container">
    <br><br>

    <div class="jumbotron container">


        <h1 class="text-center">Edit</h1>
    </div>

    <div class="row">

        <form action="../helpers/update.php" method="POST">
            <br><br>
            <div class="col-6 offset-2">
             <input type="hidden" class="form-control" name="id" value="<?php echo $result['id'] ?>"><br>
             <label for="floatingInput" class="form-control  h4 "><strong>Mrežni Element</strong></label>
             <input type="text" class="form-control" name="element" id="floatingInput" value="<?php echo $result['element'] ?>"><br>
                <label class="form-control  h4 bg-light"><strong>Lokacija</strong></label>
                <input type="text" class="form-control" name="lokacija" value="<?php echo $result['lokacija'] ?>"><br>
                <label class="form-control  h4 bg-light"><strong>Početak Radova</strong></label>
                <input type="text" class="form-control" name="pocetak" value="<?php echo $result['pocetak'] ?>"><br>
                <label class="form-control  h4 bg-light"><strong>Trajanje Radova</strong></label>
                <input type="text" class="form-control" name="trajanje" value="<?php echo $result['trajanje'] ?>"><br>
                <label class="form-control  h4 bg-light"><strong>Komentar</strong></label>
                <input type="text" class="form-control" name="komentar" value="<?php echo $result['komentar'] ?>"><br>

                <button type="submit" name="btnUpdate" class="btn btn-info offset-2 w-50">Update</button>
                <br><br>
            </div>


        </form>
    </div>

</div>
</body>

</html>