<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Форма</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
   <h1 class="text-center mt-4 fw-bold bg-primary text-white position-sticky">Форма внесения студентов в базу данных</h1>
   <div class="container shadow bg-light rounded mt-5 h-75 border border-warning">
      <div class="row">
         <div class="col-4 border-end">
            <form class="row g-3" action="/insert.php">
               <div class="co-12">
                  <label class="form-label" for=""><strong>Имя</strong></label>
                  <input required class="form-control" type="text" name="name">
               </div>

               <div class="co-12">
                  <label class="form-label" for=""><strong>Фамилия</strong></label>
                  <input required class="form-control" type="text" name="second_name">
               </div>

               <div class="co-12">
                  <label class="form-label" for=""><strong>Год рождения</strong></label>
                  <input required class="form-control" type="number" name="year">
               </div>

               <div class="co-12">
                  <label class="form-label" for=""><strong>Курс</strong></label>
                  <select class="form-select" name="course" id="">
                     <?php foreach ($courses as $c) { ?>
                        <option value="<?= $c ?>"><?= $c ?></option>
                     <?php } ?>
                  </select>
               </div>

               <div class="col-12">
                  <button class="btn btn-warning w-100 mt-2 mb-4 text-white" type="submit">Добавить запись</button>
               </div>
            </form>
         </div>
         <div class="col-8">
            <table class="table text-center">
               <thead>
                  <tr>
                     <th>Имя</th>
                     <th>Фамилия</th>
                     <th>Год рождения</th>
                     <th>Курс</th>
                     <th></th>
                  </tr>
               <tbody">
                  <?php foreach ($result as $student) { ?>
                     <tr>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['second_name'] ?></td>
                        <td><?= $student['year'] ?></td>
                        <td><?= $student['course'] ?></td>
                        <td><a class="btn btn-danger" href="delete.php?id=<?= $student['id'] ?>">Удалить</a></td>
                     </tr>
                  <?php } ?>
               </tbody>
               </thead>
            </table>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>