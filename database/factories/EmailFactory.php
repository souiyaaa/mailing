<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Email;
use App\Models\EmailAccount;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Email>
 */
class EmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Email::class;
    public function definition(): array
    {
         return [
            'name' => $this->faker->name(),
            'subject' => $this->faker->text(),
            'content' => $this->faker->text(),
            'email_account_id' => EmailAccount::factory(), // Automatically create related Email_Account
        ];
    }
}
