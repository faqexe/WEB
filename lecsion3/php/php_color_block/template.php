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
   <style>
      .block {
         border: 2px solid black;
         height: 100px;
      }

      .container {
         justify-content: center;
         align-items: center;
         width: 700px;
         height: 200px;
      }
   </style>

   <h4>Задание1. Написать приложение которое позволяет управлять цветом блока
   </h4>

   <div class="container d-flex p-2 border border-info shadow rounded">
      <form>
         <div class="row">
            <div class="col-4">
               <input class="form-control" value="<?= $color ?>" type="color" name="color">
            </div>
            <div class="col-4">
               <select class="form-select me-5" name="type">
                  <option value="Цвет фона">Цвет фона</option>
                  <option value="Цвет шрифта">Цвет шрифта</option>
               </select>
            </div>
            <div class="col-4 block" style="background: <?= $bgColor ?>; color: <?= $fontColor ?>;">
               <b style="font-size: 20px;">Текст</b>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Отправить</button>
         </div>
      </form>
      <!-- <pre><?= var_dump($_SESSION) ?></pre> -->
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>