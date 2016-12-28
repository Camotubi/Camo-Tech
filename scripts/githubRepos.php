<?php
  $uRL = "https://api.github.com/users/Camotubi/repos";
  $cSession = curl_init();
  curl_setopt($cSession, CURLOPT_URL,$uRL);
  curl_setopt($cSession, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($cSession, CURLOPT_USERAGENT,"Awesome-Octocat-App");
  $result = curl_exec($cSession);
  curl_close($cSession);

  $json= json_decode($result);
  foreach($json as $repo)
  {
    echo "<li>";
    echo "<h3>".$repo->name."</h3>";
    echo "<p>".$repo->description."</p>";
    echo "<a href=\"".$repo->html_url."\">Source Code</a>";
    echo "<p>".$repo->id."</p>";
    echo "</li>";
  }
?>
