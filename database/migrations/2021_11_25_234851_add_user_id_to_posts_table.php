<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            /* $table->unsignedBigInteger('user_id')->after("id"); */
            /* $table->foreign('user_id')->references('id')->on('users'); */
            $table->foreignId('user_id')->constrained()->after("id");
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn("user_id");
        });
    }
}
