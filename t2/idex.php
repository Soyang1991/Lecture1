<?php
function calculate_triangle_area($base, $height) {
    return ($base * $height) / 2;
}
$base = 5;
$height = 10;
echo "The area of the triangle is: " . calculate_triangle_area($base, $height);
?>

<?php
function find_single_number($arr) {
    $result = 0;
    foreach ($arr as $num) {
        $result ^= $num;
    }
    return $result;
}
$array = array(5, 3, 4, 3, 4);
echo "The single number in the array is: " . find_single_number($array);
?>

<?php
function day_type($day) {
    switch (strtolower($day)) {
        case 'monday':
        case 'tuesday':
        case 'wednesday':
        case 'thursday':
        case 'friday':
            return "It's a weekday.";
        case 'saturday':
        case 'sunday':
            return "It's a weekend.";
        default:
            return "Invalid day.";
    }
}

$day = 'Wednesday';
echo day_type($day);
?>