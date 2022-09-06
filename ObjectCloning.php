<?php

require_once "data/Student.php";

$student=new Student();
$student->id="1";
$student->name="Eko";
$student->value=100;
$student->setSample("JAK");

var_dump($student);

$student2= clone $student;
var_dump($student2);