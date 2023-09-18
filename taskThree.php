<?php 

$transactions = [
    [
        'Transaction ID' => 1,
        'Date' => '2023-01-15',
        'Amount' => 1000,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 2,
        'Date' => '2023-02-10',
        'Amount' => 500,
        'Type' => 'Withdrawal',
    ],
    [
        'Transaction ID' => 3,
        'Date' => '2023-03-05',
        'Amount' => 700,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 4,
        'Date' => '2023-04-20',
        'Amount' => 300,
        'Type' => 'Withdrawal',
    ],
    [
        'Transaction ID' => 5,
        'Date' => '2023-05-12',
        'Amount' => 1200,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 6,
        'Date' => '2023-06-25',
        'Amount' => 200,
        'Type' => 'Withdrawal',
    ],
    [
        'Transaction ID' => 7,
        'Date' => '2023-07-10',
        'Amount' => 900,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 8,
        'Date' => '2023-08-15',
        'Amount' => 600,
        'Type' => 'Withdrawal',
    ],
    [
        'Transaction ID' => 9,
        'Date' => '2023-09-05',
        'Amount' => 800,
        'Type' => 'Deposit',
    ],
    [
        'Transaction ID' => 10,
        'Date' => '2023-10-20',
        'Amount' => 400,
        'Type' => 'Withdrawal',
    ],
];


// Calculate and print the total amount of all "Deposit" transactions.
$totalDeposit= 0;
foreach($transactions as $transaction){
    if($transaction['Type'] == "Deposit"){
       $totalDeposit += $transaction['Amount'];
    }
}

echo "total Deposit amount: " . $totalDeposit;

echo "\n";


// Calculate and print the total amount of all "Withdrawal" transactions.
$totalWithdra = 0;
foreach($transactions as $transaction){
    if($transaction['Type'] == "Withdrawal"){
        $totalWithdra += $transaction['Amount'];
    }
}

echo "total Withdrawal amount: " . $totalWithdra;


echo "\n";
// Calculate and print the net balance (total deposits - total withdrawals).

$netBalance = $totalDeposit - $totalWithdra;

echo "Net Balance Here: " . $netBalance;


echo "\n";

// Find and print the date of the first "Deposit" transaction
$depositData; 
foreach($transactions as $transaction){
    if($transaction['Type'] == "Deposit"){
        $depositData = $transaction['Date'];
        break;
    }
}

echo "the date of the first Deposit: " . $depositData;




echo "\n";

//Create a new array named `recent_transactions` containing only transactions fromthe last three months.
 $recent_transactions = [];
 $cureenDate = date('Y-m-d');
 $threeMonthsAgo = date('Y-m-d', strtotime('-3 months'));

// $threeMonthsAgo = strtotime(date('Y-m-d')) - strtotime('-3 months');
echo $threeMonthsAgo;


foreach($transactions as $transaction){
    if($transaction['Date'] >= $threeMonthsAgo && $transaction['Date'] <= $cureenDate && $transaction['Type'] == 'Withdrawal'){
        array_push($recent_transactions, $transaction);
    }
}

echo "\n";

print_r($recent_transactions);