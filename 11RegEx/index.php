<?php
// Basic concepts around the reguler Expression
$arr = ["L5M 5E6", "K1A 0B1", "L4W 1S7", "M5V 3L9", "L5M5E7", "LLRRLL"];

echo "Starts with the K<br>";
// For that one we has ^
foreach ($arr as $code) {
    if(preg_match('/^K/i', $code)){
        echo $code;
    } 
}

echo "<br>End with the 9<br>";
// ends with k  (So this one we has $)
foreach ($arr as $code) {
    if(preg_match('/9$/i', $code)){
        echo $code;
    } 
}

echo "<br>char with no white space and 6 chars<br>";
foreach ($arr as $code){
    // This is we pass both ^ and $  (this two for start and end we give in big all fromats)
    // all the chats including numbers
    // lenght we want
    if (preg_match('/^[A-Za-z0-9]{6}$/', $code)) {
        echo $code;
    }
}

echo "<br> Check if there is a '1S' toghater in any string<br>";
foreach ($arr as $code){
    if (preg_match('/1S/', $code)) {
        echo $code;
    }
}

echo "<br> Check if there starts with 'L' and ends with 'L'  and 'RR' repeat in between<br>";
foreach ($arr as $code){
    // Here the \b is showing the boundry of the word
    // \w is the word and * upto last
    // if l start to l
    // check between L and L
    if (preg_match('/\bL\w*L\b/', $code)) {
        echo $code;
    }
}

echo "<br> Check if there starts with 'L' and ends with 'L' <br>";
foreach ($arr as $code){
   // /b is the start and end of the word
   // w* after anywhere in the word
   // RR or LL 
   // upto last word to the b
    if (preg_match('/\b\w*(RR|LL)\w*\b/', $code)) {
        echo $code;
    }
}

// Make sure the 
echo "<br> Check the code if its legal or not <br>";
foreach ($arr as $code) {
    // We must has char, num, char, 
    // ? means optional( we pass space exact before that means the space is optional over here)
    // Then, num, char, num
    // We must have that format
    // char, num, char, space, num, char, num
    if (!preg_match('/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/', $code)) {
        echo $code . " is illegal\n";
    }
}

$names = [
    "Alice", "Aiden", "Amelia", "Aaron", "Abigail", "Adam", "Ava", "Andrew",
    "Brandon", "Brianna", "Bobby", "Bella", "Benjamin", "Brooke", "Brayden",
    "Catherine", "Cameron", "Claire", "Caleb", "Christina", "Colin", "Chloe",
    "Daniel", "Diana", "David", "Daisy", "Dominic", "Derek", "Delilah",
    "Emily", "Ethan", "Ella", "Eli", "Evelyn", "Eric", "Emma", "Ethan",
    "Fiona", "Felix", "Freya", "Frank", "Faith", "Finn", "Florence",
    "Grace", "Gabriel", "Giselle", "Gavin", "Gabriella", "Graham", "Gina",
    "Hannah", "Henry", "Harper", "Heidi", "Hugo", "Hazel", "Harrison",
    "Isabella", "Isaac", "Ivy", "Ian", "Iris", "Imogen", "Ivan",
    "Jack", "Jasmine", "James", "Jenna", "Jared", "Julia", "Jordan",
    "Katherine", "Kevin", "Kayla", "Kyle", "Kylie", "Kieran", "Kimberly",
    "Liam", "Lily", "Lucas", "Lola", "Logan", "Leah", "Liam",
    "Mason", "Mia", "Matthew", "Megan", "Maya", "Miles", "Monica",
    "Nora", "Nathan", "Natalie", "Nina", "Nicholas", "Noah", "Naomi",
    "Olivia", "Owen", "Oscar", "Ophelia", "Oliver", "Orlando", "Oriana",
    "Paige", "Parker", "Penelope", "Peter", "Phoebe", "Piper", "Patrick",
    "Quinn", "Quincy", "Quiana", "Quinlan", "Quin", "Qadir", "Quinley",
    "Riley", "Rachel", "Ryan", "Ruby", "Reagan", "Robert", "Rebecca",
    "Samantha", "Samuel", "Sophie", "Steven", "Sophia", "Shane", "Sarah",
    "Thomas", "Tiffany", "Tyler", "Tessa", "Troy", "Tina", "Talia",
    "Uma", "Ulysses", "Ursula", "Usher", "Uri", "Ulani", "Umaira",
    "Violet", "Victor", "Vanessa", "Vincent", "Vivian", "Vera", "Valerie",
    "William", "Wendy", "Wyatt", "Whitney", "Walter", "Willa", "Wayne",
    "Xander", "Xena", "Ximena", "Xerxes", "Xyla", "Xaviera", "Xenia",
    "Yara", "Yvonne", "Yasmin", "Yosef", "Yara", "Yolanda", "Yasmine",
    "Zoe", "Zach", "Zara", "Zane", "Zelda", "Zia", "Zuri"
];

echo "<br> Check if name start with Za // and print it<br>";
foreach($names as $name){
$pattern = '/^Za/';
if(preg_match($pattern, $name )){
    echo $name." ";
    }
}

echo "<br> Remove Za named element from array";
// $names = array_filter($names, function($name){
//     $pattern = '/^Za/';
//     return !preg_match($pattern, $name);
// });

// echo "<br> Updated names array: <br>";
// print_r($names);


$names = array_filter($names, function($name){
    $ptt = '/^Al/';
    return !preg_match($ptt, $name);
});

echo "<br> Updates the names from the HEHE second time array<br>";
print_r($names);

?>