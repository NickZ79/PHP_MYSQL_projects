<?php
/* ***[[[STEP #2 ]]]***
Name: Nicholas Zastrow
Date: 10/17/2025
Description: Fall 2025 CIS222 Midterm
*/

include 'classes/Account.php';
include 'classes/Customer.php';
include 'functions.php';

// ***[[[STEP #3 ]]]*** create a variable to hold the total of all accounts and set it to 0
$total = 0;

// Accounts list
$accounts = [
    new Account(20489446, 'Checking', -20),
    new Account(20148896, 'Savings', 380),

    // ***[[[STEP #4]]]*** add two new accounts: CD and Bond with their account numbers and balances
    new Account(20555671, 'CD', 1500.00),
    new Account(20555672, 'Bond', 2500.00),
];

// ***[[[STEP #5]]]*** Change first name and last name to yours
$customer = new Customer('Nicholas', 'Zastrow', 'name@eg.link', 'Jup!t3r2684', $accounts);

// (Optional) If your functions.php provides a different currency formatter,
// change the call below to match (e.g., moneyFormat, formatMoney, etc.).
if (!function_exists('formatCurrency')) {
    function formatCurrency($amount) {
        return number_format($amount, 2);
    }
}
?>

<?php include 'includes/header.php'; ?>
<h2>Name: <b><?= $customer->getFullName() ?></b></h2>

<table>
  <tr>
    <th>Account Number</th>
    <th>Account Type</th>
    <th>Balance</th>
  </tr>

  <?php foreach ($customer->accounts as $account) { ?>
    <?php
      // ***[[[STEP #6 ]]]*** add the account balance to the total as you loop
      $total += $account->getBalance();
      $isPositive = $account->getBalance() >= 0;
    ?>
    <tr>
      <td><?= $account->number ?></td>
      <td><?= $account->type ?></td>

      <?php if ($isPositive) { ?>
        <td class="credit">
      <?php } else { ?>
        <td class="overdrawn">
      <?php } ?>
        <!-- ***[[[STEP #7]]]*** format the balance by calling format function -->
        $ <?= formatCurrency($account->getBalance()) ?>
      </td>
    </tr>
  <?php } ?>

  <!-- ***[[[STEP #8 ]]]*** header row to show the total of all accounts -->
  <?php $totalPositive = $total >= 0; ?>
  <tr>
    <th colspan="2" style="text-align:right;">Total of all accounts:</th>
    <?php if ($totalPositive) { ?>
      <th class="credit">$ <?= formatCurrency($total) ?></th>
    <?php } else { ?>
      <th class="overdrawn">$ <?= formatCurrency($total) ?></th>
    <?php } ?>
  </tr>
</table>

<!-- ***[[[STEP #9 ]]]*** add display_results.php page as an include -->
<?php include 'display_results.php'; ?>

<?php include 'includes/footer.php'; ?>
