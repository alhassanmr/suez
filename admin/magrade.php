<?php
$pdo = new PDO("mysql:host=localhost;dbname=suez;charset=utf8", "Developer", "developer");

header("Content-Type:application/json; Charset=utf-8");

// As you can see, here you will have where Employee_ID = :employee_id, this will be
// automatically replaced by the PDO object with the data sent in execute(array('employee_id' => $_POST['Employee_ID']))
// This is a good practice to avoid SqlInyection attacks
$st = $pdo->prepare("SELECT firstname,surname FROM employees WHERE firstname = :firstname");
$st->execute(array ('firstname' => $_POST['firstname']));
$data = $st->fetch(PDO::FETCH_ASSOC);

echo json_encode(array ('status' => true, 'firstname' => $data ['firstname'], 'surname' => $data ['surname']));