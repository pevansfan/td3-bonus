<?php 

//Question 1
$firstnames = array("Steve", "Jeff", "Marck", "Sundar");

//Question 2
$firstnames[2] = "Marc";

//Question 3
array_push($firstnames, "Bill");

//Question 4
array_unshift($firstnames, "Julie");

//Question 5
sort($firstnames);

//Question 6
echo "Le premier prénom du tableau firstnames est " . $firstnames[0] . ".<br>";

//Question 7
$numberOfFirstnames = count($firstnames);

//Question 8
echo "<ul>";
foreach ($firstnames as $firstname) {
    echo "<li>$firstname</li>";
}
echo "</ul>";

// Question 9
$user1 = [
    'firstname' => 'Steve',
    'lastname' => 'Jobs',
    'email' => 'steve.jobs@apple.com'
];
$user2 = [
    'firstname' => 'Jeff',
    'lastname' => 'Bezos',
    'email' => 'jeff.bezos@amazon.com'
];
$user3 = [
    'firstname' => 'Mark',
    'lastname' => 'Zuckerberg',
    'email' => 'mark.zuckerberg@meta.com'
];
$user4 = [
    'firstname' => 'Sundar',
    'lastname' => 'Pichai',
    'email' => 'sundar.pichai@google.com'
];
$user5 = [
    'firstname' => 'Bill',
    'lastname' => 'Gates',
    'email' => 'bill.gates@microsoft.com'
];
$user6 = [
    'firstname' => 'Julie',
    'lastname' => 'Chapon',
    'email' => 'julie.chapon@example.com'
];

//Question 10
$users = [$user1, $user2, $user3, $user4, $user5, $user6];

//Question 11
echo "L'email du patron de Meta est " . $users[2]['email'] . ". Le patron de Microsoft s’appelle " . $users[4]['firstname'] . " " . $users[4]['lastname'] . ". Dans un monde si masculin, Yuka a été fondé en 2016, notamment par " . $users[5]['firstname'] . " " . $users[5]['lastname'] . ".<br>";

//Question 12
echo "<ul>";
foreach ($users as $user) {
    echo "<li>{$user['firstname']} {$user['lastname']} - {$user['email']}</li>";
}
echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <
</body>
</html>