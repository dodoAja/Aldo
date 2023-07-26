<?php
include_once('connect.php');
 
$sql = "SELECT * FROM scores, students WHERE scores.students_id = students.id;";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-primary ">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Class Ranking</span>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-head"><h3 class="text-center">Input Data</h3></div>
                    <div class="card-body">
                        <form method="POST" action="">
                        <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label for="number">Nilai</label>
                        <input type="number" name="Score" id="Score" class="form-control">
                        </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                        <button class="btn bg-primary text-white">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-head">
                        Data Nilai
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $key => $d):?>
                            <tr>
                                <td><?= $key + 1?></td>
                                <td><?= $d['name']?></td>
                                <td><?= $d['scores']?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>