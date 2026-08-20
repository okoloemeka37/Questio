<?php

namespace Database\Factories;

use App\Models\Invoicefields;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoicefields>
 */
class InvoicefieldsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return['name'=>fake()->city,'email'=>fake()->email(),'phone'=>fake()->phoneNumber(),'address'=>fake()->address(),'admin_id'=>1,'Tracking_Id'=>fake()->numberBetween(123456,654321),'active'=>'Active','company_id'=>1];
    }
}
