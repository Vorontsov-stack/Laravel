@extends('layouts.main')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <title>Мой сайт</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
      nav {
        background-color: #f2f2f2;
        padding: 10px;
      }
      nav a {
        display: inline-block;
        margin: 0 10px;
        color: #333;
        text-decoration: none;
        font-weight: bold;
      }
      section {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
      }
      section h2 {
        color: #333;
        font-size: 24px;
        margin-top: 0;
      }
      section p {
        font-size: 16px;
        line-height: 1.5;
        color: #666;
      }
      footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Добро пожаловать на мой сайт!</h1>
    </header>
    <nav>
      <a href="#">Главная</a>
      <a href="#">О нас</a>
      <a href="#">Контакты</a>
    </nav>
    <section>
      <h2>Привет, мир!</h2>
      <p>Это мой первый сайт, созданный с помощью HTML и CSS.</p>
    </section>
    <footer>
      <p>&copy; 2023 Мой сайт</p>
    </footer>
  </body>
</html>


@endsection