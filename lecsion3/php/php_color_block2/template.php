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
      .container {
         max-width: 800px;
         min-height: 600px;
         border: 2px solid black;
      }
   </style>
   <h4>Задание 2. Написать приложение которое позволяет управлять цветом сразу трех блоков
   </h4>
   <div class="container">
      <form action="#">
         <div class="row mt-2">
            <div class="col-3">
               <input class="form-control mb-2 h-100" value="<?= $color ?>" type="color" name="color" id="">
            </div>
            <div class="col-3 ms-2">
               <select class="form-select" name="type">
                  <option value="Цвет фона">Цвет фона</option>
                  <option value="Цвет шрифта">Цвет шрифта</option>
               </select>
               <select class="form-select me-5 mt-2" name="block">
                  <option value="block1">1</option>
                  <option value="block2">2</option>
                  <option value="block3">3</option>
               </select>
            </div>
         </div>
         <div class="row">
            <div class="col mt-3">
               <button class="btn btn-primary w-50" type="submit">Отправить</button>
            </div>
         </div>
         <div class="row text-center mt-2">
            <div class="col-3">
               <div class="border border-dark p-2" style="background: <?= $bgColor ?>; color: <?= $fontColor ?>;">
                  <b style="font-size: 18px;">Текст</b>
               </div>
               <div class="border border-dark p-2" style="background: <?= $bgColor ?>; color: <?= $fontColor ?>;">
                  <b style="font-size: 18px;">Текст</b>
               </div>
               <div class="border border-dark p-2" style="background: <?= $bgColor ?>; color: <?= $fontColor ?>;">
                  <b style="font-size: 18px;">Текст</b>
               </div>
            </div>
         </div>
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>