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

        $transactions = Transaction::factory(10)->make();

        foreach ($transactions as $transaction) {
            $user = $users->random();

            $transaction->user_id = $user->id;

            $transaction->save();

            $randomProducts = $products->random(mt_rand(2, 10));

            $transaction->products()->attach($randomProducts->pluck('id'));

            $bill = Bill::factory()->make();

            $bill->transaction_id = $transaction->id;

            $bill->save();
        }

    }
}
