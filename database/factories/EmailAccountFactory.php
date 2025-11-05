<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EmailAccount;;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Email_Account>
 */
class EmailAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = EmailAccount::class;
    public function definition(): array
    {
        return [
            // You can add any fields you want; for now only timestamps
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
