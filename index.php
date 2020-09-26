<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
include('Student.php');
$students = array();


$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$first->status = "Freshman";
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$second->status = "Junior";
$students['a456'] = $second;

$one = new Student();
$one->surname = "Luo";
$one->first_name = "zibin";
$one->add_email('home','1824912827@qq.com');
$one->add_email('work1','1824912827@qq.com');
$one->add_grade(88);
$one->add_grade(77);
$one->add_grade(66);
$one->status = "Freshman";
$students['b857'] = $one;

$two = new Student();
$two->surname = "Luo ";
$two->first_name = "zibin";
$two->add_email('home','1824912827@qq.com');
$two->add_email('work1','1824912827@qq.com');
$two->add_grade(88);
$two->add_grade(77);
$two->add_grade(66);
$two->status = "Senior";
$students['b557'] = $two;

ksort($students); // one of the many sort functions
foreach($students as $student)
echo $student->toString();
        ?>
    </body>
</html>
