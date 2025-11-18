<?php
 
    // *****[[[STEP #11 ]]]*** set variables ***
    // change the value to 25% of the total amount from all accounts
    $investment = $total * 0.25;
    $interest_rate = 6;
    $years = 10; // changed from 5 to 10 years

    // calculate the future value
    $future_value = calculate_future_value($investment, $interest_rate, $years);

    // apply currency and percent formatting
    $investment_f = get_currency_format($investment);
    $yearly_rate_f = get_percent_format($interest_rate);
    $future_value_f = get_currency_format($future_value);
?>
<br><br>

<table>
<tr>
    <th><h2>Future Value Calculator</h2></th>
    <th></th>
</tr>    
<tr>
    <td>Investment Amount (25% of total amount from all accounts):</td>
    <td><?php echo $investment_f; ?></td>
</tr>
<tr>
    <td>Yearly Interest Rate:</td>
    <td><?php echo $yearly_rate_f; ?></td>
</tr>
<tr>
    <td>Number of Years:</td>
    <td><?php echo $years; ?></td>
</tr>
<tr>
    <td>Future Value:</td>
    <td><?php echo $future_value_f; ?></td>
</tr>
<tr>    
 <th></th>
 <th></th>
</tr>
</table>

<!-- *** [[[STEP #12 ]]]**** add the function date to show today's date ******** -->
<p>This calculation was done on <b><?php echo date('F j, Y'); ?></b></p>
<!-- **************** date section ENDs **********************-->

</body>
</html>
