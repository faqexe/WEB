<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Генерация</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <link rel="stylesheet" href="adaptive.css">
</head>

<body>
   <div class="container text-center">
      <div class="row justify-content-center">
         <?php foreach ($i as $path) { ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-2">
               <div class="img-wrapper border border-primary shadow-lg">
                  <img src="<?= $path ?>" alt="Зима" data-bs-toggle="modal" data-bs-target="#modal1">
               </div>
            </div>
         <?php } ?>
      </div>
   </div>

   <!-- Модальное окно -->
   <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Зима</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
               Зима, крестьянен торжествует...
               <img class="shadow p-3 mb-5 bg-body rounded" src="https://www.fonstola.ru/images/201312/fonstola.ru_137647.jpg" alt="Зима">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Хорошечно!</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Модальное окно -->
   <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Весна</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
               Весна – сколько надежд, мечтаний...
               <img class="shadow p-3 mb-5 bg-body rounded" src="https://stihi.ru/pics/2016/02/28/9711.jpg" alt="Весна">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Хорошечно!</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Модальное окно -->
   <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Лето</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
               На лесной полянке чудо...
               <img class="shadow p-3 mb-5 bg-body rounded" src="https://ratatum.com/wp-content/uploads/2018/01/7-1068x801.jpg" alt="Лето">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Хорошечно!</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Модальное окно -->
   <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Осень</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
               Унылая пора! Очей очарованье!
               <img class="shadow p-3 mb-5 bg-body rounded" src="https://zabaka.net/upload/gochat/2015/09/1277803.jpg" alt="Осень">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Хорошечно!</button>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>