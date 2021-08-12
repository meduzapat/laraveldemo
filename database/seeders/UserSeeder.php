<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Creates 3 users as requested.
     */
	public function run()
	{
		User::factory()
			->count(3)
			->hasPosts(1)
			->create();
	}
}
