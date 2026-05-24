<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Обробка POST</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="form-post.html" class="navbar-brand">← Назад до форми POST</a>
    </div>
  </nav>

  <main class="container py-5">

    <h1 class="mb-4">Результат обробки форми POST</h1>

    <div class="card mb-4">
      <div class="card-body">

        <?php
          $firstName = $_POST["first_name"] ?? "";
          $lastName = $_POST["last_name"] ?? "";
          $email = $_POST["email"] ?? "";
          $payment = $_POST["payment"] ?? "";
          $comment = $_POST["comment"] ?? "";

          echo "<h2>Отримані дані</h2>";
          echo "<p><strong>Ім'я:</strong> " . htmlspecialchars($firstName) . "</p>";
          echo "<p><strong>Прізвище:</strong> " . htmlspecialchars($lastName) . "</p>";
          echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
          echo "<p><strong>Форма оплати:</strong> " . htmlspecialchars($payment) . "</p>";
          echo "<p><strong>Коментар:</strong> " . nl2br(htmlspecialchars($comment)) . "</p>";

          /*
            Запис даних у файл data.txt
            Файл data.txt має лежати в тій самій папці, що й processing-post.php
          */

          $fileName = "data.txt";

          $record = "------------------------------" . PHP_EOL;
          $record .= "Дата: " . date("Y-m-d H:i:s") . PHP_EOL;
          $record .= "Ім'я: " . $firstName . PHP_EOL;
          $record .= "Прізвище: " . $lastName . PHP_EOL;
          $record .= "Email: " . $email . PHP_EOL;
          $record .= "Форма оплати: " . $payment . PHP_EOL;
          $record .= "Коментар: " . $comment . PHP_EOL;
          $record .= PHP_EOL;

          $result = file_put_contents($fileName, $record, FILE_APPEND | LOCK_EX);

          if ($result !== false) {
            echo "<div class='alert alert-success mt-4'>Дані успішно записано у файл <strong>data.txt</strong>.</div>";
          } else {
            echo "<div class='alert alert-danger mt-4'>Помилка: не вдалося записати дані у файл.</div>";
          }
        ?>

      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h2>Поточний вміст файлу data.txt</h2>

        <pre class="bg-dark text-white p-3 rounded"><?php
          if (file_exists("data.txt")) {
            echo htmlspecialchars(file_get_contents("data.txt"));
          } else {
            echo "Файл data.txt ще не створено.";
          }
        ?></pre>
      </div>
    </div>

  </main>

</body>
</html>