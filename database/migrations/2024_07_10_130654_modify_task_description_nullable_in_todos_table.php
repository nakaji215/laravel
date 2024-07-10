<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTaskDescriptionNullableInTodosTable extends Migration
{
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->string('task_description')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->string('task_description')->nullable(false)->change();
        });
    }
}
