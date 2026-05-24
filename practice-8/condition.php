<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Умовний оператор PHP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">← Назад до практичної №8</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Приклад 3. Умовний оператор if / else</h1>

    <div class="card mb-4">
      <div class="card-body">
        <?php
          $score = 82;

          echo "<h2>Результат студента</h2>";
          echo "<p>Кількість балів: <strong>$score</strong></p>";

          if ($score >= 90) {
            echo "<div class='alert alert-success'>Оцінка: відмінно</div>";
          } elseif ($score >= 75) {
            echo "<div class='alert alert-primary'>Оцінка: добре</div>";
          } elseif ($score >= 60) {
            echo "<div class='alert alert-warning'>Оцінка: задовільно</div>";
          } else {
            echo "<div class='alert alert-danger'>Оцінка: незадовільно</div>";
          }
        ?>
      </div>
    </div>

    <h3>Код прикладу:</h3>

    <pre class="bg-dark text-white p-3 rounded"><code>&lt;?php
$score = 82;

echo "&lt;h2&gt;Результат студента&lt;/h2&gt;";
echo "&lt;p&gt;Кількість балів: &lt;strong&gt;$score&lt;/strong&gt;&lt;/p&gt;";

if ($score &gt;= 90) {
  echo "&lt;div class='alert alert-success'&gt;Оцінка: відмінно&lt;/div&gt;";
} elseif ($score &gt;= 75) {
  echo "&lt;div class='alert alert-primary'&gt;Оцінка: добре&lt;/div&gt;";
} elseif ($score &gt;= 60) {
  echo "&lt;div class='alert alert-warning'&gt;Оцінка: задовільно&lt;/div&gt;";
} else {
  echo "&lt;div class='alert alert-danger'&gt;Оцінка: незадовільно&lt;/div&gt;";
}
?&gt;</code></pre>

    <div class="alert alert-info mt-4">
      <strong>Пояснення:</strong> оператор <code>if</code> перевіряє умову.
      Якщо вона істинна - виконується один блок коду, якщо ні - інший.
    </div>

  </main>

</body>
</html>