<?php


// for($let = 1; $let < 10; $let++)
// {
//     if($let == 6)
//     {
//         break;
//     }
//     echo "$let";
// // }

// for($i = 0; $i < 10; $i++)
// {
//     if($i == 5)
//     {
//         continue;
//     }
//     echo "$i";
// }
// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 1; $j <= 3; $j++) {
//         echo "$i-$j ";
//     }
//     echo "<br>";
// }

// $numbers = [10, 20, 30, 40];

// // for($i = 0; $i < count($numbers); $i++)
// // {
// //    for($j = $i + 1; $j <= 10; $j++)
// //    {
// //     echo $numbers[$i] . "<br/>" . " ";
// //    }
// // }

// foreach ($numbers as $num)
// {
//     echo $num . " ";
// }

// for($i = 1; $i < 101; $i++)
// {
//     echo $i . "<br/>";
// }

// $let =  [10, 20, 13, 14, 30, 40, 50, 70, 80, 90, 100, 110, 120];

// foreach($let as $le)
// {
//     if($le % 2 == 0)
//     {
//         echo "$le - juft son <br/>";
//     } else
//     {
//         echo "$le - toq sonlar <br/>";
//     }
// }


$yosh  = (int) readline("Yoshingizni Kiriting");


if($yosh >= 18)
{
    echo "Siz voyaga yetgansiz";
} else
{
    echo "Siz voyaga yetmagansiz";
}


?>