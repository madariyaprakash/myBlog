<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //Here we are adding another column to the posts table in myblog database. 
            //We are creating this coulmn as index as well with unique() method.
            //we are storing slug column to create URL for each and every post with unique names. so that it will be easy to search.
        $table->string('slug')->unique()->after('body');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('votes');    
        });
    }
}
