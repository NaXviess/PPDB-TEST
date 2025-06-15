<?php
session_start();

// Simulasi koneksi database dan data user
$users = [
  ['username' => 'admin', 'password' => 'admin123', 'role' => 'admin'],
  ['username' => 'user1', 'password' => 'user123', 'role' => 'user']
];

// Tangkap data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role     = $_POST['role'] ?? '';

$login_success = false;

foreach ($users as $user) {
  if ($user['username'] === $username && $user['password'] === $password && $user['role'] === $role) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
    $login_success = true;
    break;
  }
}

if ($login_success) {
  if ($role === 'admin') {
    header('Location: admin-dashboard.php');
  } else {
    header('Location: user-dashboard.php');
  }
  exit;
} else {
  echo "<script>alert('Login gagal. Periksa kembali data Anda.'); window.history.back();</script>";
  exit;
}
?>
