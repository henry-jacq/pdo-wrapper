<?php

require 'Database.php';

$db = new Database('localhost', 'photogram_db', 'root', 'password');

$db->setTable('auth');

$sql = 'SELECT * FROM auth WHERE email = :email';

$values = ['email' => 'beautifulpanda@gmail.com'];

$query = $db->run($sql, $values);

echo '<pre>';
// print_r($query->fetch(PDO::FETCH_ASSOC));
// print_r($db->getRowById(3));

// print_r($db->insert([
//     'username' => 'orangemouse417',
//     'fullname' => 'Levi Mitchelle',
//     'password' => 'marjorie',
//     'email' => 'levi.mitchelle@example.com',
//     'active' => 0,
//     'signup_time' => date('Y-m-d H:i:s')
// ]));

// print_r($db->update(['fullname' => 'John Doe'], $values));

// print_r($db->delete(['email' => 'levi.mitchelle@example.com']));

print_r($db->deleteById(7));

// print_r($db->row($sql, $values));
// print_r($db->getCount($sql, $values));

echo '</pre>';
