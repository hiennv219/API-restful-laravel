<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
		// $owner = new Role();
		// $owner->name         = 'owner';
		// $owner->display_name = 'Project Owner'; // optional
		// $owner->description  = 'User is the owner of a given project'; // optional
		// $owner->save();

		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'User Administrator'; // optional
		$admin->description  = 'User is allowed to manage and edit other users'; // optional
		$admin->save();

    }
}
