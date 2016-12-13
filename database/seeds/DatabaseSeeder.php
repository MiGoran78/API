<?php

use App\Maker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    DB::statements('SET FOREIGN_KEY_CHECKS = 0');
	    Maker::truncate();
		Model::unguard();

		$this->call('MakersSeed');
		$this->call('VehiclesSeed');
	}

}
