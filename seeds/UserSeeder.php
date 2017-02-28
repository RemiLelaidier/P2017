<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $table = $this->table("users");
        $faker = Faker\Factory::create();

        $data = array(
            array(
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'username' => "admin",
                'mail' => $faker->email,
                'password' => sha1("password"),
                'permission' => "ADMIN"
            ),
            array(
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'username' => "user",
                'mail' => $faker->email,
                'password' => sha1("password"),
                'permission' => "USER"
            )
        );

        $table->insert($data)
            ->save();
    }
}
