<?php

  public function up()
  {
    Schema::create('role_user', function (Blueprint $table) {
      $table->increments('id');

      $table->unsignedInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');

      $table->unsignedInteger('role_id');
      $table->foreign('role_id')->references('id')->on('roles');

      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('role_user');
  }

?>