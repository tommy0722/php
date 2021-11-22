<form action="?" method="post">
    <input type="number" name="stars">
    <input type="submit" value="送出">
</form>
<?php
if (isset($_POST['stars'])) {
    stars($_POST['stars']);
}
// function stars($row)
// {
//     for ($j = 1; $j <= $row; $j++) {

//         for ($i = 0; $i < ($row - $j); $i++) {
//             echo "&ensp;";
//         }

//         for ($i = 0; $i < (2 * $j - 1); $i++) {

//             echo "*";
//         }
//         echo "<br>";
//     }
// }
stars2('A',7);
function stars2($symbol,$row)
{
    for ($j = 1; $j <= $row; $j++) {

        for ($i = 0; $i < ($row - $j); $i++) {
            echo "&ensp;";
        }

        for ($i = 0; $i < (2 * $j - 1); $i++) {

            echo "$symbol";
        }
        echo "<br>";
    }
}



?>