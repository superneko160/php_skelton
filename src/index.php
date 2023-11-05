<?php
require_once 'Student.php';
require_once 'StudentList.php';

$student_list = new StudentList();
$student_list->add(new Student("Tanaka"));
$student_list->add(new Student("Endo"));
$student_list->add(new Student("Yamazaki"));

foreach($student_list as $student) {
    print "<p>{$student->getName()}</p>";
}