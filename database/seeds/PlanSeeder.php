<?php

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('plans')->insert([
            'name' => 'Basic Plan',
            'time' => '24 hours',
            'min_amount' => '$50',
            'max_amount' => '$1,000',
            'roi' => '5%',
            'description' => 'This plan is for the beginners and
            less experienced, when it comes to investement.you can start from here'
        ]);

        DB::table('plans')->insert([
            'name' => 'Advanced Plan',
            'time' => '3 days plan',
            'min_amount' => '$1000',
            'max_amount' => '$3000',
            'roi' => '20%',
            'description' => 'This plan is for better experienced as it has higher 
            R.O.I than the Basic plan'
        ]);

        DB::table('plans')->insert([
            'name' => 'Gold Plan',
            'time' => '5 days plan',
            'min_amount' => '$3,000',
            'max_amount' => 'unlimited',
            'roi' => '40%',
            'description' => 'Gold Plan!!! This plan is for the go getters. when you invest with
            the minimum of 3,000 bucks... you will be credited with a whooping $4,200 in your wallet..'
        ]);

        DB::table('plans')->insert([
            'name' => 'Representative Plan',
            'time' => '10 days plan',
            'min_amount' => '$10,000',
            'max_amount' => '$50,000',
            'roi' => '50%',
            'description' => 'If you are not ready to make it big stay off this Plan. with just the
            minimum investement of $10,000. I assure you that you are receiving $15,000 after 10 days'
        ]);

        DB::table('plans')->insert([
            'name' => 'Diamond Plan',
            'time' => '10 days plan',
            'min_amount' => '$50,000',
            'max_amount' => '$100,000',
            'roi' => '75%',
            'description' => 'Earn Pointe got amazing deals for you and we are sure you gonna love it,
            when you invest with the minimum of $50,000 you will earn $87,500 in 10 days Amazing Right?'
        ]);

        DB::table('plans')->insert([
            'name' => 'Emirates Plan',
            'time' => '10 days plan',
            'min_amount' => '$100,000',
            'max_amount' => 'unlimited',
            'roi' => '100%',
            'description' => 'Cheers for the Emirates....A special plan made for the legends, We are paying 
            you 100% of your minimum investement of $100,000. That sounds too Good to be true huh..? you can check it out today!'
        ]);
    }
}
