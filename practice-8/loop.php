<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Цикл for у PHP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">← Назад до практичної №8</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Приклад 4. Цикл for у PHP</h1>

    <div class="card mb-4">
      <div class="card-body">
        <h2>Виведення чисел від 1 до 10</h2>

        <ul class="list-group">
          <?php
            for ($i = 1; $i <= 10; $i++) {
              echo "<li class='list-group-item'>Рядок номер $i</li>";
            }
          ?>
        </ul>
      </div>
    </div>

    <h3>Код прикладу:</h3>

    <pre class="bg-dark text-white p-3 rounded"><code>&lt;?php
for ($i = 1; $i &lt;= 10; $i++) {
  echo "&lt;li class='list-group-item'&gt;Рядок номер $i&lt;/li&gt;";
}
?&gt;</code></pre>

    <div class="alert alert-info mt-4">
      <strong>Пояснення:</strong> цикл <code>for</code> використовується тоді,
      коли потрібно повторити дію певну кількість разів.
    </div>

  </main>

</body>
</html>