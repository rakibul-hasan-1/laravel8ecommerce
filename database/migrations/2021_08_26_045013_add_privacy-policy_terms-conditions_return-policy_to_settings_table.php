<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrivacyPolicyTermsConditionsReturnPolicyToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('privacy_and_policy');
            $table->text('terms_and_conditions');
            $table->text('return_policy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('privacy_and_policy');
            $table->text('terms_and_conditions');
            $table->text('return_policy');
        });
    }
}
