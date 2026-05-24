<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Запис у файл PHP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">← Назад до практичної №8</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Приклад 7. Запис даних у файл</h1>

    <div class="alert alert-info">
      У цьому прикладі PHP відкриває файл <code>data.txt</code>,
      записує в нього новий рядок і після цього показує вміст файлу.
    </div>

    <div class="card mb-4">
      <div class="card-body">

        <?php
          $fileName = "data.txt";

          $currentDate = date("Y-m-d H:i:s");
          $text = "Новий запис створено: " . $currentDate . PHP_EOL;

          $file = fopen($fileName, "a+");

          if ($file) {
            fwrite($file, $text);
            fclose($file);

            echo "<div class='alert alert-success'>Дані успішно записано у файл.</div>";
          } else {
            echo "<div class='alert alert-danger'>Не вдалося відкрити файл для запису.</div>";
          }
        ?>

        <h2 class="mt-4">Вміст файлу data.txt:</h2>

        <pre class="bg-dark text-white p-3 rounded"><?php
          if (file_exists($fileName)) {
            echo htmlspecialchars(file_get_contents($fileName));
          } else {
            echo "Файл поки що не створено.";
          }
        ?></pre>

      </div>
    </div>

    <h3>Код прикладу:</h3>

    <pre class="bg-dark text-white p-3 rounded"><code>&lt;?php
$fileName = "data.txt";

$currentDate = date("Y-m-d H:i:s");
$text = "Новий запис створено: " . $currentDate . PHP_EOL;

$file = fopen($fileName, "a+");

if ($file) {
  fwrite($file, $text);
  fclose($file);

  echo "Дані успішно записано у файл.";
} else {
  echo "Не вдалося відкрити файл для запису.";
}
?&gt;</code></pre>

    <div class="alert alert-warning mt-4">
      Щоб побачити новий запис, оновіть сторінку. Після кожного оновлення PHP додасть новий рядок у файл.
    </div>

  </main>

</body>
</html>