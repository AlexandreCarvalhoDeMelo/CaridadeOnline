<?php

use Illuminate\Database\Seeder;
use Charis\Models\OrganizationTarget;

class OrganizationTargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrganizationTarget::truncate();
        factory(OrganizationTarget::class, 100)->make();
    }
}
