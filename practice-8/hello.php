<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Перший PHP-сценарій</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">← Назад до практичної №8</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Приклад 1. Перший PHP-сценарій</h1>

    <div class="card mb-4">
      <div class="card-body">
        <?php
          echo "<h2>Мій перший сценарій PHP!</h2>";
          echo "<p>Цей текст виведено за допомогою команди echo.</p>";
        ?>
      </div>
    </div>

    <h3>Код прикладу:</h3>

    <pre class="bg-dark text-white p-3 rounded"><code>&lt;?php
echo "&lt;h2&gt;Мій перший сценарій PHP!&lt;/h2&gt;";
echo "&lt;p&gt;Цей текст виведено за допомогою команди echo.&lt;/p&gt;";
?&gt;</code></pre>

    <div class="alert alert-info mt-4">
      <strong>Пояснення:</strong> команда <code>echo</code> використовується для виведення тексту,
      HTML-тегів або значень змінних у браузер.
    </div>

  </main>

</body>
</html>