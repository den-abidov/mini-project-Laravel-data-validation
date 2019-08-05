<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <!-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" -->
  <!-- This page CSS -->
  <link rel="stylesheet" href="css/app.css">
  <title>Новый пользователь</title>  
</head>
<body>
  <p id="page-date"><?= "Страница обновлена : ".NOW();?></p>
  <h3>Добавить пользователя</h3>

  <form>
    
    <div class="form-group">
      <label for="sponsorID">ID спонсора</label>
      <input type="number" class="form-control" id="sponsorID" placeholder="ввести">      
    </div>
   
    <div class="form-group">
      <label for="name">Ваше имя</label>
      <input type="text" class="form-control" id="name" placeholder="ввести">      
    </div>

    <div class="form-group">
      <label for="phone">Телефон</label>
      <input type="phone" class="form-control" id="phone" placeholder="ввести">      
    </div>
    
    <div class="form-group">
      <label for="email">Электронная почта</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ввести">
      <small id="emailHelp" class="form-text text-muted">Никому не сообщим его.</small>
    </div>
    
    <div class="form-group">
      <label for="password">Пароль</label>
      <input type="password" class="form-control" id="password" placeholder="пароль">
    </div>

    <div id="success-div" class="alert alert-success" role="alert">
      Пользователь успешно добавлен!
    </div>
      
    <div id="error-div" class="alert alert-danger" role="alert">
      Ошибка
    </div>

    <div id="button-div">
      <button type="submit" class="btn btn-primary">Добавить</button>
    </div> 
    

  </form>
</body>
</html>