<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'gender' => $this->faker->numberBetween(1,3),
            'email' => $this->faker->email(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->prefecture . $this->faker->city . $this->faker->streetAddress,
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->text(50)
        ];
    }
}
