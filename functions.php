<?php
function calculate_future_value($investment, $interest_rate, $years) {
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value += $future_value * $interest_rate *.01;
    }
    return $future_value;
}

function get_currency_format($value) {
    $formatted_value = '$'.number_format($value, 2);
    return $formatted_value;
}

function get_percent_format($value) {
    $formatted_value = $value . '%';
    return $formatted_value;
}
?>
