<?php

use Illuminate\Database\Seeder;
use App\Models\InvoiceTemplate;

class InvoiceTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 3; $i++) {
            InvoiceTemplate::insert([
                'id' => $i,
                'name' => 'Template ' . $i,
            ]);
        }
    }
}
