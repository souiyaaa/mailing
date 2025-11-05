<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;
use App\Models\EmailAccount;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Account::class;
    public function definition(): array
    {
        return [
        'account_mail' => $this->faker->unique()->safeEmail(),
            'email_account_id' => EmailAccount::factory()
        ];
    }
}
