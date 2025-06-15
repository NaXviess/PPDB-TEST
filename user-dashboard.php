<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
  header('Location: index.html');
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
  </div>
</body>
</html>
