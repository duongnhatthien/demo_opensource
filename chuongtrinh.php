<?php
// Định nghĩa tên các hàm
function add($a, $b)
{
}
function subtract($a, $b)
{
}
function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero!";
    }
    return $a / $b;
}
?>