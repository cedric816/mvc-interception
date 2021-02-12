<?php

  // session start & portal
  include("ctrl.session-start.php");
  include("ctrl.session-portal.php");

  // still here = authenticated

  // grab the user id
  $sentId = filter_input(INPUT_GET, "user-delete", FILTER_VALIDATE_INT);
  if($sentId === false) {
    header("Location: ?user-read-all#misspelled-id");
    exit;
  }

  // db start
  include("model/mod.pdo.php");
  include("model/mod.users.php");
  $usersObj = new UsersClass($pdo);
  $result = $usersObj->read($sentId);
  $pdo = NULL; // db close
  if($result){
    include("view/view.html.php");
    include("view/view.user-delete.php");
  } 
  else        header("Location: ?user-read-all#no-db-row-affected");
  exit;

  