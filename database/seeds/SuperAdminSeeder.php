<?php

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins=array(array(
            'name' => 'Super Admin 1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'super admin',
            'status' => '1')
        ,
        array('name' => 'Super Admin 2',
            'email' => 'dev@gmail.com',
            'password' => Hash::make('142536'),
            'role' => 'super admin',
            'status' => '1'
        ));
        DB::table('admins')->insert($admins);
    }
}
