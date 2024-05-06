<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $statuses = [
            [
                'name' => 'noStatus',
                'description' => 'بدون وضعیت',
                // Add other fields as needed
            ],
            [
                'name' => 'pending',
                'description' => 'در حال بررسی',
                // Add other fields as needed
            ],
            [
                'name' => 'approved',
                'description' => 'قبول شده',
                // Add other fields as needed
            ],
            [
                'name' => 'rejected',
                'description' => 'رد شده',
                // Add other fields as needed
            ],
        ];

        foreach ($statuses as $status) {
            Status::query()->create($status);
        }
    }
}
