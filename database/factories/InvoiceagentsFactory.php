<?php

namespace Database\Factories;

use App\Models\Invoiceagents;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoiceagents>
 */
class InvoiceagentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return ['name'=>fake()->name(),'email'=>fake()->unique(true)->safeEmail(),'admin_id'=>1,'password'=>'$2y$12$UG0RIQ..NWAzuStEBeFu9eaMXX5VhapiVaztqi2awLu3q0v4zl6x2','AgentId'=>fake()->randomLetter(),'type'=>'Agent','active'=>'Active','company_id'=>1,'remember_token'=>fake()->text()];
    }
}
