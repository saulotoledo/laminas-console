<?php
use Laminas\Console\Console;
use Laminas\Console\Exception\ExceptionInterface as ConsoleException;
use Laminas\Console\Prompt;

require_once __DIR__ . '\..\vendor\autoload.php';

$confirm = new Prompt\Password('Password> ');
$result = $confirm->show();
