<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Invoicefields;
use App\Models\Invoiceagents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        Invoicefields::factory()->count(20)->create();
        Invoiceagents::factory()->count(15)->create();
       /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
 */
        
    }
}
