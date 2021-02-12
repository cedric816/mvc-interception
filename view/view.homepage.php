<?php

  $page = new HTMLPage();
  $page->css[] = "assets/css/style.css";
  $page->title = "Homepage";
  $page->bodyClass = "layout-homepage";
  $page->body  = 
     "<main>" . PHP_EOL
    ."<h1>Homepage</h1>" . PHP_EOL
    ."<p>Everything must starts somewhere!</p>"
    ."<a href = ?login>Se connecter</a>"
    ."</main>";
  echo $page;