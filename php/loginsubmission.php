<?php
    $data['email'] = $_POST['email'];
    $data['password'] = $_POST['password'];
    echo json_encode($data);
    exit;

?>