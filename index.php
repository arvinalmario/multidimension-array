<?php

//git init
//git add .
//git status
//git commit -m "commit msg"
//git branch -M master
//git remote add origins https://github.com/arvinalmario/multidimension-array.git
//git push -u origin master
//git pull
//git checkout -b name of branch
//git push -set-upstream origin name of branch




$array1 = []; // 1D
$array2 = [ [],[] ]; //2D
$array3 = [ [ [] ], [ [ ] ] ]; //3D

// $array = [ 
//            'Array1' => ['a' => 1, 'b' => 2, 'c' => 3], 
//            'Array2' => ['d' => 4, 'e' => 5, 'f' => 6], 
//            'Array3' => ['g' => 7, 'h' => 8, 'i' => 9], 
//            'Array4' => ['j' => 10, 'k' => 11, 'l' => 12] 
//          ];

// var_dump($array);
// echo '<br>';
// echo '<br>';
// echo '<br>';
// print_r($array);

// echo 'The value of the array is: ' .$array['Array4'][0];

        //  foreach($array as $index1 => $array1){
        //             echo $index1 .'<br>';
        //         foreach($array1 as $index2 => $array2){
        //             echo $index2 .'  ' .$array2 ."\t";
        //         }
        //         echo '<br>';
        //  }


//     $array = [ 

//                'Main1' => [ 
//                  'Arr1' =>['a' => 1, 'b' => 2, 'c' => 3], 
//                  'Arr2' =>[100 => 4,5,6], 
//                  'Arr3' =>[7,8,9],
//                  'Arr4' => [10,11,12]
//                 ],

//                'Main2' => [
//                  'Arr5' => [13,14,15],
//                  'Arr6' => [16,17,18],
//                  'Arr7' => [19,20,21]
//                 ]

//              ];

//     $arr = [ [ [],[],[] ], [ [],[],[1,2,3] ] ];

//         // echo 'The value of the array is: ' .$array['Main1']['Arr2'][102];

//         foreach($array as $index1 => $array1){
//                         echo $index1 .'<br>';
//             foreach($array1 as $index2 => $array2){
//                         echo $index2 .'<br>';
//                 foreach($array2 as $index3 => $array3){
//                         echo $index3 .'   ' .$array3 ."\t";
//                 }
//                 echo '<br>';
//             }
//                 echo '<br>';
//         }

//Pass by value and Pass reference

        echo 'Pass by Value' .'<br>';
        function passbyValue($param){

                $param += 5;
                echo 'This is the value inside of the function: ' .$param;
        }

        $num = 10;

        passbyValue($num);

        echo '<br>' .'This is the value outside of the function: ' .$num;

        echo '<br>';
        echo '<br>';

        echo 'Pass by Reference' .'<br>';
        function passbyRef(&$param1){

                $param1 += 5;
                echo 'This is the value inside of the function: ' .$param1;   
        }

        $num1 = 10;
        passbyRef($num1);

        echo '<br>' .'This is the value outside of the function: ' .$num1;



?>