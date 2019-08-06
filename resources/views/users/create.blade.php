<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- This page CSS -->
  <link rel="stylesheet" href="../css/app.css">
  <title>Новый пользователь</title>  
</head>
<body>
  <p id="page-date"><?= "Страница обновлена : ".NOW();?></p>
  <h3>Добавить пользователя</h3>

  <form method="POST" action="/users">
    @csrf
    <!-- инпуты -->
    <div class="form-group">
      <label for="sponsor_id">ID спонсора</label>
      <input type="number" class="form-control" id="sponsor_id" name="sponsor_id" placeholder="ввести" class="{{$errors->has('sponsor_id')?'red-border':''}}" value="{{ old('sponsor_id') }}">
      @error('sponsor_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror      
    </div>
   
    <div class="form-group">
      <label for="name">Ваше имя</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="ввести" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">      
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="phone">Телефон</label>
      <input type="phone" class="form-control" id="phone" name="phone" placeholder="ввести" class="{{$errors->has('phone')?'red-border':''}}" value="{{ old('phone') }}">      
      @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="form-group">
      <label for="email">Электронная почта</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="ввести" class="{{$errors->has('email')?'red-border':''}}" value="{{ old('email') }}">
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <small id="emailHelp" class="form-text text-muted">Никому не сообщим его.</small>
    </div>
    
    <div class="form-group">
      <label for="password">Пароль</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="ввести" class="{{$errors->has('password')?'red-border':''}}" value="{{ old('password') }}">
      @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- ошибки валидации -->
    @if($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @else
      @if($message == "пользователь добавлен")
        <div id="success-div" class="alert alert-success" role="alert">
          Пользователь успешно добавлен.
        </div>
      @endif
    @endif

    <!-- кнопка "Добавить" -->
    <div id="button-div">
      <button type="submit" class="btn btn-primary">Добавить</button>
    </div> 
    

  </form>
</body>
</html>