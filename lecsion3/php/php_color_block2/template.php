<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Цветные блоки</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
   <style>
      .container {
         max-width: 700px;
         min-height: 300px;
      }

      .block {
         display: flex;
         justify-content: center;
         align-items: center;
      }
   </style>
   <h4>Задание 2. Написать приложение которое позволяет управлять цветом сразу трех блоков
   </h4>
   <div class="container border border-primary shadow text-center">
      <form action="#">
         <div class="row mt-3 justify-content-center ms-auto me-auto">
            <div class="col-4 mb-1">
               <input class="form-control mb-2 h-75" value="<?= $color ?>" type="color" name="color">
               <div class="col-12">
                  <select class="form-select" name="type">
                     <option value="Цвет фона">Цвет фона</option>
                     <option value="Цвет шрифта">Цвет шрифта</option>
                  </select>
                  <select class="form-select mt-2" name="block">
                     <option value="block1">1</option>
                     <option value="block2">2</option>
                     <option value="block3">3</option>
                  </select>
               </div>
               <button class="btn btn-primary w-100 mt-2" type="submit">Отправить</button>
            </div>
            <div class="col-5">
               <div class="border border-dark h-50 block" style="background: <?= $bgColor ?>; color: <?= $fontColor ?>;">
                  <b style="font-size: 18px;">Текст</b>
               </div>
               <div class="border border-dark h-50 mt-2 block" style="background: <?= $bgColor1 ?>; color: <?= $fontColor1 ?>;">
                  <b style="font-size: 18px;">Текст</b>
               </div>
               <div class="border border-dark h-50 mt-2 block" style="background: <?= $bgColor2 ?>; color: <?= $fontColor2 ?>;">
                  <b style="font-size: 18px;">Текст</b>
               </div>
            </div>
         </div>
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>