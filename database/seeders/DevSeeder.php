<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert a few suppliers
        DB::table('suppliers')->insert([
            [
                'name' => 'Acme Pharmaceuticals',
                'contact_name' => 'John Doe',
                'email' => 'sales@acmepharma.test',
                'phone' => '+1-555-0100',
                'address' => '123 Acme St, Springfield',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Global Med Supplies',
                'contact_name' => 'Jane Smith',
                'email' => 'contact@globalmed.test',
                'phone' => '+1-555-0200',
                'address' => '456 Global Ave, Metropolis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert a few products
        DB::table('products')->insert([
            [
                'name' => 'Ibuprofen Tablets',
                'sku' => 'IBU-200-50',
                'price' => 8.99,
                'quantity' => 120,
                'description' => '200mg, 50 tablets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paracetamol 500mg',
                'sku' => 'PARA-500-20',
                'price' => 5.49,
                'quantity' => 80,
                'description' => '20 tablets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
