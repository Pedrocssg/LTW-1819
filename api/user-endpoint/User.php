<?php
  include_once(__DIR__ . '/../../includes/Session.php');
  include_once(__DIR__ . '/../../database/db-access/user.php');

  if (!isset($_SESSION['userID'])) {
    echo json_encode(array('error' => 'user_not_logged_in'));
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (($user = getUser($_SESSION['userID'])) == false) {
      echo json_encode(array('error' => 'null'));
    }
    else {
      echo json_encode($user);
    }
  }
  elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo json_encode(array('error' => 'under_construction'));
  }
?>
