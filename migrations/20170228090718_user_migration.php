<?php

use \App\Adapter\MigrationAdapter;

class UserMigration extends MigrationAdapter
{
    public function up(){
        $this->schema->create('users', function(Illuminate\Database\Schema\Blueprint $table){
            // Auto-increment id
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('username');
            $table->string('password');
            $table->string('role');
            // Required for Eloquent's created_at and updated_at columns
            $table->timestamps();
        });
    }

    public function down(){
        $this->schema->drop('users');
    }
}
