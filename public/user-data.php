<?php

session_start();

return [
    'user_id' => $formData['user_id'],
    'login' => 'toto',
    'password_hash' => password_hash('12345678', PASSWORD_DEFAULT),
];