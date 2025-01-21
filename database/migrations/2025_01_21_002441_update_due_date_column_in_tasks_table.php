<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDueDateColumnInTasksTable extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dateTime('due_date')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('due_date')->nullable()->change();
        });
    }
}

