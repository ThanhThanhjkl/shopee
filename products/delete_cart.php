<?php
$id = $_GET['id'];
$sql = "DELETE FROM address_client where id = $id";
$query = mysqli_query($connect, $sql);
if ($query) {
  // Redirect to the previous page
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit;
} else {
  // Handle error
  echo "Error deleting data";
}
?>