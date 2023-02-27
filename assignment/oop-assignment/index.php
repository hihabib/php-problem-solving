<?php 

require_once "./Person.php";


if(isset($_POST['submit'])){

    $personName = $_POST['personName'];
    $personEmail = $_POST['personEmail'];

    $person -> setName($personName);
    $person -> setEmail($personEmail);

}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <?php if (isset($_POST['submit'])) : ?>
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: <?php echo $person -> getName(); ?></li>
                        <li class="list-group-item">Email: <?php  echo $person -> getEmail(); ?></li>
                    </ul>
                </div>

                <?php endif; ?>

                <form class="mt-4" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="personName" id="exampleInputName">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="personEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>