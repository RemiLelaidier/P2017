<?php

include 'MigrationAdapter.php';

use \App\Adapter\MigrationAdapter;

class ArticleMigration extends MigrationAdapter
{
    public function up(){
        $this->schema->create('articles', function(Illuminate\Database\Schema\Blueprint $table){
            // Auto-increment id
            $table->increments('id');
            $table->integer('user_id');
            $table->string('titre');
            $table->string('description');
            $table->string('source');
            $table->date('date_diff');
            $table->boolean('util');
            $table->boolean('sensible');
            $table->integer('qualite');
            $table->string('type');
            // Required for Eloquent's created_at and updated_at columns
            $table->timestamps();
        });

        $this->schema->create('article_theme', function(Illuminate\Database\Schema\Blueprint $table){
            $table->integer('article_id');
            $table->integer('theme_id');
        });
    }

    public function down(){
        $this->schema->drop('articles');
    }
}
