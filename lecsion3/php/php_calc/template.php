<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Калькулятор</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
   <h5>Задание 2. Реализовать калькулятор</h5>
   <div class="my-form container text-center w-25 border border-2 border-primary rounded p-4 shadow-lg">
      <form action="#">
         <div class="row justify-content-center">
            <div class="col-4 col-2 col-md-auto w-75">
               <input class="form-control shadow bg-body rounded" type="text" name="a" value="<?= $a ?>" placeholder="a">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-4 mt-2 col-2 col-md-auto w-75">
               <input class="form-control shadow bg-body rounded" type="text" name="b" value="<?= $b ?>" placeholder="b">
            </div>
         </div>
         <div class="row mt-2">
            <div class="col">
               <button type="submit" class="btn btn-primary w-75 shadow">Вычислить</button>
            </div>
         </div>
      </form>
      <hr>
      Сумма = <?= $sum ?> <br>
      Произведение = <?= $pro ?> <br>
      Частное = <?= $chas ?> <br>
      Разность = <?= $raz ?>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>