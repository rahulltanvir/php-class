<?php
// $i=1;

// for($i=1; $i<=100; $i++){
//     echo $i.'<br>';
// }

// $i=1;

// for($i=1; $i<=100; $i++){
//     if($i  % 2 !== 0){
// echo $i.'<br>'; 
//     }
    
    
// }
// $i=1;

// for($i=1; $i<=10; $i++){
//     if($i % 2 !==0){
//         echo $i.'<br>';
//     }
// }


// $food= array("rice","bergar","Apple","Banana");

// foreach ($food as $allfoods){
//     echo $allfoods.PHP_EOL; 
// }

// Global variable 
//  $name = "Amar";
//    function sayhello() {
//     GLOBAL $name;
//       echo "Global variable name: $name" .PHP_EOL;
//       $name = "Amarjyot";
//       echo "Global variable name changed to: $name" .PHP_EOL;
//    }
//    sayhello();
//    echo "Global variable name after function call: $name" .PHP_EOL;

// $fruits=array('banana','mango','apple', 'lemon'); //index array
// echo $fruits['2'].'<br>';

// $students=array("rahul"=>30,"akash"=>40, "evan"=>50); //Associative Array
// echo $students['rahul'].'<br>';


// $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964); //update array data
// $cars["year"] = 2024;
// echo $cars["year"].'<br>';

// $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964); //add array data
// $cars["toyota"]=60;
// $cars['hhkj']=70;
// var_dump ($cars).'\n';




// $numbers = [2, 1, 3];

// $first_number = array_shift($numbers);

// print_r($numbers);
// echo $first_number;



// $cars = array("Volvo", "BMW", "Toyota"); //array remove
// array_splice($cars, 0, 2);
// var_dump($cars);


// $numbers = array(4, 6, 2, 22, 11); coto theke boro
// sort($numbers);
// print_r($numbers);

// $numbers = array(4, 6, 2, 22, 11); Boro theke choto
// rsort($numbers);
// print_r($numbers);
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// asort($age);
// print_r($age);




// array_merge:
// $server_side = ['PHP'];

// $client_side = ['JavaScript', 'CSS', 'HTML'];

// $full_stack = array_merge($client_side,$server_side); Jei variable age deya jabe oita sei index a jabe

// print_r($full_stack);


// anonymous function : j function er kono Nam hoi na variable diye function lekha hoi============
// $multiply = function ($x, $y) {
// 	return $x * $y;
// };

// var_dump($multiply(4,5));


//Arrow Function:==========
// $list=[20,40,50];

// $result=array_map(
//     fn ($items)=>$items*2, //Arrow Function jeita duita argument nibe
//     $list
// );
// print_r($result);


//variable function=======
// $name='strlen';
// echo $name('tanvir');
// $name='strlen';
// echo $name('rahul');

//  


// $lengths = [10, 20, 30];

// // calculate areas
// $areas = array_map(function ($length) {
// 	return $length * $length;
// }, $lengths);


// print_r($areas);


//array_map length
// class Square
// {
// 	public static function area($length)
// 	{
// 		return $length * $length;
// 	}
// }

// $lengths = [10, 20, 30];

// $areas = array_map('Square::area', $lengths);


// print_r($areas);




// // array array_reduce()



// $numbers = [20,40,50];

// $total  = array_reduce($numbers, function ($previous, $current) {
//     return $previous + $current;
// });

// echo $total; // 60


//
$a=40;
$b=60;
$c=400;

// সবচেয়ে বড় সংখ্যা খুঁজে বের করা
$maior = max($a, $b, $c);

// আউটপুট দেখানো
echo "$maior eh o maior";
?>









