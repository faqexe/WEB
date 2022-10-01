<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Как тебя зовут?</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
   <h5>Задание 1. Реализовать систему которая будет здороваться по нажатию на Отправить</h5>
   <div class="my-form container text-center w-25 border border-2 border-primary rounded">
      <form action="#">
         <div class="row">
            <div class="col">
               Как тебя зовут? =)
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-2 col-md-auto w-75">
               <input class="form-control" type="text" name="fio">
            </div>
         </div>
         <div class="row mt-2">
            <div class="col">
               <button type="submit" class="btn btn-primary w-75">Отправить</button>
            </div>
         </div>
      </form>
      <hr>
      Привет, <?= $name ?>!
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>