<?php

  public function up()
  {
    Schema::create('roles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 255);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('roles');
  }

?>