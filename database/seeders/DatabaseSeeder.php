<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Email;
use App\Models\EmailAccount;
use App\Models\Account;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        EmailAccount::factory(5)->create()->each(function ($emailAccount) {
        Email::factory(3)->create(['email_account_id' => $emailAccount->id]);
        Account::factory(2)->create(['email_account_id' => $emailAccount->id]);
    });
    }
}
