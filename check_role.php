<?php

  $user_id = Auth::user()->id;

  $user = User::find($user_id);

  $user_roles = $user->roles()->get();

  $raw_user_roles = [];

  foreach ($user_roles as $key => $value) {
    array_push($raw_user_roles, $value->name);
  }

  $is_admin = false;

  if (in_array('admin', $raw_user_roles)) {
    $is_admin = true;
  }

?>