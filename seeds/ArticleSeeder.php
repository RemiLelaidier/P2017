<?php

use Phinx\Seed\AbstractSeed;
use App\Model\Theme;
use App\Model\Article;

class ArticleSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $articlesTab = $this->table('articles');

        $dataArticles = array(
            array(
                'titre' => "Article1",
                'description' => $faker->text,
                'source' => $faker->url,
                'date_diff' => $faker->unixTime,
                'util' => 1,
                'sensible' => 0,
                'qualite' => 1,
                'type' => "TXT"
            ),
            array(
                'titre' => "Article2",
                'description' => $faker->text,
                'source' => $faker->url,
                'date_diff' => $faker->unixTime,
                'util' => 1,
                'sensible' => 0,
                'qualite' => 1,
                'type' => "TXT"
            ),
            array(
                'titre' => "Article3",
                'description' => $faker->text,
                'source' => $faker->url,
                'date_diff' => $faker->unixTime,
                'util' => 1,
                'sensible' => 0,
                'qualite' => 1,
                'type' => "TXT"
            ),
            array(
                'titre' => "Article4",
                'description' => $faker->text,
                'source' => $faker->url,
                'date_diff' => $faker->unixTime,
                'util' => 1,
                'sensible' => 0,
                'qualite' => 1,
                'type' => "TXT"
            )
        );

        $articlesTab->insert($dataArticles)
            ->save();

        $relArticles = $this->table('article_theme');
        $dataRel = array(
            array(
                'article_id' => '1',
                'theme_id' => '1'
            ),
            array(
                'article_id' => '1',
                'theme_id' => '3'
            ),
            array(
                'article_id' => '1',
                'theme_id' => '2'
            ),
            array(
                'article_id' => '2',
                'theme_id' => '3'
            ),
            array(
                'article_id' => '2',
                'theme_id' => '10'
            ),
            array(
                'article_id' => '2',
                'theme_id' => '20'
            ),
            array(
                'article_id' => '3',
                'theme_id' => '26'
            ),
            array(
                'article_id' => '3',
                'theme_id' => '6'
            ),
            array(
                'article_id' => '4',
                'theme_id' => '35'
            ),
            array(
                'article_id' => '4',
                'theme_id' => '10'
            ),
        );

        $relArticles->insert($dataRel)
            ->save();

    }
}
