<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Обробка GET</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="form-get.html" class="navbar-brand">← Назад до форми GET</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Результат обробки форми GET</h1>

    <div class="card">
      <div class="card-body">

        <?php
          $firstName = $_GET["first_name"] ?? "";
          $lastName = $_GET["last_name"] ?? "";
          $email = $_GET["email"] ?? "";
          $course = $_GET["course"] ?? "";

          echo "<h2>Отримані дані</h2>";
          echo "<p><strong>Ім'я:</strong> " . htmlspecialchars($firstName) . "</p>";
          echo "<p><strong>Прізвище:</strong> " . htmlspecialchars($lastName) . "</p>";
          echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
          echo "<p><strong>Обраний курс:</strong> " . htmlspecialchars($course) . "</p>";
        ?>

      </div>
    </div>

    <div class="alert alert-warning mt-4">
      Зверніть увагу: після відправлення форми дані видно в адресному рядку браузера.
      Саме це є особливістю методу <strong>GET</strong>.
    </div>

    <h3 class="mt-4">Фрагмент PHP-коду:</h3>

    <pre class="bg-dark text-white p-3 rounded"><code>&lt;?php
$firstName = $_GET["first_name"] ?? "";
$lastName = $_GET["last_name"] ?? "";
$email = $_GET["email"] ?? "";
$course = $_GET["course"] ?? "";

echo htmlspecialchars($firstName);
echo htmlspecialchars($lastName);
echo htmlspecialchars($email);
echo htmlspecialchars($course);
?&gt;</code></pre>

  </main>

</body>
</html>