# PHP_MYSQL# 💳 PHP & MySQL – Customer Accounts Dashboard

## 📝 Overview

This project is a PHP & MySQL practice application that displays a **customer’s bank accounts** in a simple web dashboard.  
The starter code included partial logic and TODO-style comments; the assignment was to complete the missing pieces by:

- Adding additional accounts
- Creating a running total of all balances
- Personalizing the customer information
- Formatting currency and rendering the data in an HTML table

The final result is a small, portfolio-ready example of **PHP OOP**, **arrays**, and **server-side rendering** of financial data.

---

## 🎯 Assignment Tasks (from inline comments)

The key steps (visible in the code comments) included:

1. **Create a total variable**  
   ```php
   // ***[[[STEP #3 ]]]*** create a variable to hold the total of all accounts and set it to 0
   $total = 0;
   ```

2. **Define the accounts list**  
   Start with provided accounts, then:

   ```php
   // Accounts list
   $accounts = [
       new Account(20489446, 'Checking', -20),
       new Account(20148896, 'Savings', 380),

       // ***[[[STEP #4]]]]*** add two new accounts: CD and Bond with their account numbers and balances
       new Account(20555671, 'CD', 1500.00),
       new Account(20555672, 'Bond', 2500.00),
   ];
   ```

3. **Customize the customer**  
   ```php
   // ***[[[STEP #5]]]]*** Change first name and last name to yours
   $customer = new Customer('Nicholas', 'Zastrow', 'name@eg.link', 'Jup!t3r2684', $accounts);
   ```

4. **Provide a currency formatter (if not already defined)**  

   ```php
   // (Optional) If your functions.php provides a different currency formatter,
   // change the call below to match (e.g., moneyFormat, formatMoney, etc.).
   if (!function_exists('formatCurrency')) {
       function formatCurrency($amount) {
           return number_format($amount, 2);
       }
   }
   ```

5. **Render the output in HTML**  
   Using PHP embedded in the view, the dashboard:

   - Prints the customer’s full name
   - Loops through `$customer->accounts`
   - Displays account number, type, and balance
   - Calculates and displays the **total of all accounts**

---

## ✨ Features

- Object-oriented PHP with `Customer` and `Account` classes  
- Array-based collection of accounts attached to a single customer  
- Running total of all balances  
- Currency formatting helper function  
- Clean HTML table output for account summary  
- Easy to extend with real database storage (MySQL)

---

## 🔧 Technologies Used

- PHP 8+  
- (Optional) MySQL for persistent storage  
- Basic HTML/CSS for layout  
- Includes file structure (`functions.php`, `includes/header.php`, etc.)

---

## ▶️ How to Run

1. **Clone or download** the project into your web server’s document root  
   (e.g., `htdocs` for XAMPP, `www` for WAMP, or `public_html`).

2. Make sure PHP is installed and your local server is running.

3. Open the main PHP file in your browser, for example:

   ```
   http://localhost/php-mysql-project/index.php
   ```

4. You should see:

   - Your name displayed as the customer  
   - A table of accounts (Checking, Savings, CD, Bond)  
   - Each balance formatted to two decimal places  
   - A total balance at the bottom

---

## 🚀 Possible Future Enhancements

- Move account data into a real MySQL database  
- Add login/auth authentication for the customer  
- Allow deposits/withdrawals and update balances dynamically  
- Add sorting/filtering by account type or balance  
- Style the page with a modern CSS framework (e.g., Bootstrap or Tailwind)

---
