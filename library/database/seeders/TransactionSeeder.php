<?php

namespace Database\Seeders;
use App\Models\Transaction;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i<50; $i++) {
            $transaction= new Transaction;

            $transaction->member_id = rand(1,20);
            $transaction->date_start = Carbon::createFromTimeStamp($faker->dateTimeBetween('-256 days', '+60 days')->getTimestamp());
            $transaction->date_end = Carbon::createFromFormat('Y-m-d H:i:s', $transaction->date_start)->addDays(30);
            
            $transaction->save();
        }
    }
}
