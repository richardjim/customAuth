<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->id('id');
            // $table->text('campaign_id');
            $table->string('name')->required();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image_URL')->nullable();
            $table->string('image_Alt')->nullable();
            $table->string('Coupon_code')->nullable();
            $table->string('Button_URL')->nullable();
            $table->string('Button_text')->nullable();
            $table->string('Footer_text')->nullable();
            $table->string('notification_URL')->nullable();
            $table->string('Email_Placeholder')->nullable();
            $table->string('Thank_you_URL')->nullable();
            $table->string('Video_URL')->nullable();
            $table->string('Link_URL')->nullable();
            $table->string('Link_text')->nullable();
            $table->string('Content_Description')->nullable();
            $table->string('Content_title')->nullable();
            $table->string('Input_Placeholder')->nullable();
            $table->string('select')->nullable();
            $table->string('campaign_id')->nullable();
            $table->string('user_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification');
    }
}
