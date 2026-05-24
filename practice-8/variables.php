<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Змінні в PHP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">← Назад до практичної №8</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Приклад 2. Змінні в PHP</h1>

    <div class="card mb-4">
      <div class="card-body">
        <?php
          $studentName = "Олександр";
          $group = "КІ-21";
          $age = 18;
          $speciality = "Комп'ютерна інженерія та програмування";

          echo "<h2>Інформація про студента</h2>";
          echo "<p><strong>Ім'я:</strong> " . $studentName . "</p>";
          echo "<p><strong>Група:</strong> " . $group . "</p>";
          echo "<p><strong>Вік:</strong> " . $age . "</p>";
          echo "<p><strong>Спеціальність:</strong> " . $speciality . "</p>";
        ?>
      </div>
    </div>

    <h3>Код прикладу:</h3>

    <pre class="bg-dark text-white p-3 rounded"><code>&lt;?php
$studentName = "Олександр";
$group = "КІ-21";
$age = 18;
$speciality = "Комп'ютерна інженерія та програмування";

echo "&lt;h2&gt;Інформація про студента&lt;/h2&gt;";
echo "&lt;p&gt;&lt;strong&gt;Ім'я:&lt;/strong&gt; " . $studentName . "&lt;/p&gt;";
echo "&lt;p&gt;&lt;strong&gt;Група:&lt;/strong&gt; " . $group . "&lt;/p&gt;";
echo "&lt;p&gt;&lt;strong&gt;Вік:&lt;/strong&gt; " . $age . "&lt;/p&gt;";
echo "&lt;p&gt;&lt;strong&gt;Спеціальність:&lt;/strong&gt; " . $speciality . "&lt;/p&gt;";
?&gt;</code></pre>

    <div class="alert alert-info mt-4">
      <strong>Пояснення:</strong> змінні в PHP починаються зі знака <code>$</code>.
      Для з'єднання тексту і змінних використовується крапка <code>.</code>.
    </div>

  </main>

</body>
</html>