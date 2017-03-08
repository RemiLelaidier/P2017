<?php

use Phinx\Seed\AbstractSeed;

class ThemeSeeder extends AbstractSeed
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
        $table = $this->table('themes');

        $faker = Faker\Factory::create();
        $data = array(
            array(
                'titre' => 'Pouvoir Militaire',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Monnaie',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Mondialisation',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'La finance et ses acteurs',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Liberalisme & Deregulation',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Enjeux geopolitique',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Europe',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Multinationales',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Lobbies',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Syndicalisme',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Traites',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => 'Technocrate',
                'description' => $faker->text,
                'couleur' => 'BLUE'
            ),
            array(
                'titre' => "L'impuissance des elus",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Corruption et conflits d'interets",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Politique professionnelle",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Les partis politiques",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Justice et pouvoir",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Avec ou sans les citoyens",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Vote, suffrages, referendum",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Reflexions generales sur la democratie",
                'description' => $faker->text,
                'couleur' => 'VERT'
            ),
            array(
                'titre' => "Lanceurs d'alerte",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Independance et liberte de la presse",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Reseaux sociaux",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Les metiers du journalisme",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Chiffres & sondages, mefiance",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Donnees perso & filtres a l'info",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Medias de grande ecoute & info en continu",
                'description' => $faker->text,
                'couleur' => 'INDIGO'
            ),
            array(
                'titre' => "Discours expert : Realisme et realite",
                'description' => $faker->text,
                'couleur' => 'VIOLET'
            ),
            array(
                'titre' => "Emotion, peur et sensationnel",
                'description' => $faker->text,
                'couleur' => 'VIOLET'
            ),
            array(
                'titre' => "Rhetorique et langage politique",
                'description' => $faker->text,
                'couleur' => 'VIOLET'
            ),
            array(
                'titre' => "Choisir les mots, alterer la pensee",
                'description' => $faker->text,
                'couleur' => 'VIOLET'
            ),
            array(
                'titre' => "La constitution",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Initiatives citoyennes",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Radicalismes et extremismes",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Rejet et desinteret de la politique",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Formation aux differents modes d'action",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Education populaire",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Education et citoyennete",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Relocaliser la politique",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Economie collaborative",
                'description' => $faker->text,
                'couleur' => 'JAUNE'
            ),
            array(
                'titre' => "Interactions, normes et dynamiques",
                'description' => $faker->text,
                'couleur' => 'ORANGE'
            ),
            array(
                'titre' => "Inegalites d'acces a la citoyennete",
                'description' => $faker->text,
                'couleur' => 'ORANGE'
            ),
            array(
                'titre' => "Travail, emploi et temps libre",
                'description' => $faker->text,
                'couleur' => 'ORANGE'
            ),
            array(
                'titre' => "Sectoriel",
                'description' => $faker->text,
                'couleur' => 'ROUGE'
            ),
            array(
                'titre' => "Approche globale",
                'description' => $faker->text,
                'couleur' => 'BLANC'
            ),
        );

        $table->insert($data)
            ->save();
    }
}
