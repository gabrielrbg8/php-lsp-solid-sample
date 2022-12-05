<?php
require 'Models/Employee.php';
use Models\Employee;

$employee = new Employee();
$employee->setName('Gabriel');
$employee->say('Olá meu amigo');
