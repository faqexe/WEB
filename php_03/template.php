<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
   <form class="p-3" action="#">
      <input value="<?= $a ?>" class="form-control" type="text" name="a" placeholder="a">
      <input value="<?= $b ?>" class="form-control mt-3" type="text" name="b" placeholder="b">
      <input value="<?= $a2 ?>" class="form-control mt-3" type="text" name="a2" placeholder="a2">
      <input value="<?= $b2 ?>" class="form-control mt-3" type="text" name="b2" placeholder="b2">

      <button type="submit" class="btn btn-warning mt-3">Отправить</button>
   </form>

   <hr>

   <div class="p-3">
      Минимальный элемент между <?= $a ?> и <?= $b ?>: <?= $c ?> <br>
      Минимальный элемент между <?= $a2 ?> и <?= $b2 ?>: <?= $c2 ?> <br>
      Минимальный элемент между минимальными <?= $c ?> и <?= $c2 ?>: <?= $c3 ?> <br>
      Минимальный элемент между всеми четырмя значениями: <?= $c3 ?>
   </div>

   <div class="p-3">
      <?= sup(5, 123) ?> <br>
      <?= sup($a, $b) ?> <br>
      <?= sup($a2, $b2) ?>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>