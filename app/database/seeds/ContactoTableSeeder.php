<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Contacto::create([
				'name'=>$faker->name,
				'email'=>$faker->email,
				'gaming_level'=>$faker->numberBetween($min = 1, $max = 4)
			]);
		}
	}

}