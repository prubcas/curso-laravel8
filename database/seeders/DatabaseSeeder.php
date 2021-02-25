<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();
        $products = Product::factory(100)->create();
        $bills = Bill::factory(10)->create();
        $transactions = Transaction::factory(10)->create();
    }
}
