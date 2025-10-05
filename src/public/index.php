<?php

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

// $transaction = new Transaction(25, description: 'Transaction 1');
// $transaction = new Transaction(25, description: 'Transaction 1');
// $transaction = new Transaction(25, description: 'Transaction 1');
// $transaction = new Transaction(25, description: 'Transaction 1');
// $transaction = new Transaction(25, description: 'Transaction 1');

var_dump(Transaction::getCount());