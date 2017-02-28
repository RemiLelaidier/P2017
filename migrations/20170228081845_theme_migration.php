<?php

use \App\Adapter\MigrationAdapter;

class ThemeMigration extends MigrationAdapter
{
    public function up(){
        $this->schema->create('themes', function(Illuminate\Database\Schema\Blueprint $table){
            // Auto-increment id
            $table->increments('id');
            $table->string('titre');
            $table->string('description');
            $table->string('couleur');
            // Required for Eloquent's created_at and updated_at columns
            $table->timestamps();
        });
    }

    public function down(){
        $this->schema->drop('themes');
    }
}
