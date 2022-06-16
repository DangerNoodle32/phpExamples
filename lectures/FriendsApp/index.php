<?php
include_once('catalog.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="container" style="height: 150px;">
        <h3 class="center">Friends App</h3>
    </div>
    <div class="row">
        <h4 class="text-center">Meet my friends</h4>
        <?php
            foreach ($users as $user) {
        ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $user->getImage(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user->getName(); ?></h5>
                    Phone : <?php echo $user->getPhone(); ?><br>
                    Address: <?php echo $user->getAddress(); ?>
                </div>
                <p class="text-center">
                    <a href="friends_friends.php" class="btn btn-primary">My Friends</a>
                </p>
            </div>
        </div>
            <?php
            }
            ?>
    </div>

</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>