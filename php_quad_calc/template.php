<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Калькулятор корней</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
   <h4>Задание 3. Реализовать калькулятор корней квадратного уравнения</h4>
   <form action="#">
      <div class="row">
         <div class="col-2">a</div>
         <div class="col-2">b</div>
         <div class="col-2">c</div>
      </div>
      <div class="row">
         <div class="col-2">
            <input class="form-control" type="text" name="a" value="<?= $a ?>" placeholder="a">
         </div>
         <div class="col-2">
            <input class="form-control" type="text" name="b" value="<?= $b ?>" placeholder="b">
         </div>
         <div class="col-2">
            <input class="form-control" type="text" name="c" value="<?= $c ?>" placeholder="c">
         </div>
      </div>
      <div class="row mt-2">
         <div class="col">
            <button type="submit" class="btn btn-primary">Отправить</button>
         </div>
      </div>
   </form>
   <br>
   <?= $a ?>x<sup>2</sup> + <?= $b ?>x + <?= $c ?> = 0 <br>
   D = <?= $d ?> <br>
   x1 = <?= $x1 ?> <br>
   x2 = <?= $x2 ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>