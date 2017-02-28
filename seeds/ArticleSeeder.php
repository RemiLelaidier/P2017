<?php

use Phinx\Seed\AbstractSeed;

class ArticleSeeder extends AbstractSeed
{
    public function run()
    {
        $table = $this->table('articles');
        $faker = Faker\Factory::create();

        $data = array(
            array(
                'titre' => "article1",
                'description' => $faker->text,
                'source' => $faker->url,
                'date_diff' => $faker->unixTime,
                'util' => 1,
                'sensible' => 0,
                'qualite' => 1,
                'type' => "TXT"
            ),
            array(
                'titre' => "article2",
                'description' => $faker->text,
                'source' => $faker->url,
                'date_diff' => $faker->unixTime,
                'util' => 1,
                'sensible' => 0,
                'qualite' => 1,
                'type' => "TXT"
            ),
        );

        $table->insert($data)
            ->save();
    }
}
