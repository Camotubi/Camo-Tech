<?php
  $servername="localhost";
  $username="camoS";
  $password="efgvwrtgs";
  $dbname="Repositories";
  $tablename="repos";
  $uRL = "https://api.github.com/users/Camotubi/repos";
  $cSession = curl_init();
  curl_setopt($cSession, CURLOPT_URL,$uRL);
  curl_setopt($cSession, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($cSession, CURLOPT_USERAGENT,"Awesome-Octocat-App");
  $result = curl_exec($cSession);
  curl_close($cSession);
  $json= json_decode($result);
  // connection
  $conn = new mysqli($servername, $username,$password,$dbname);
  //Check
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM ". $tablename;
  $result = $conn->query($sql);
  foreach($json as $gitRepo)
  {
    if(result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if($gitRepo->id != row["id"]);
        {
          if($gitRepo->name != row["name"])
          {
                $sql = "UPDATE " . $tablename . " SET name='$gitRepo->name' WHERE id='".$row["id"]."'";
                $conn->exec($sql);
          }
          if($gitRepo->description != row["description"])
          {
                $sql = "UPDATE " . $tablename . " SET description='$gitRepo->description' WHERE id='".$row["id"]."'";
                $conn->exec($sql)
          }
          if($gitRepo->html_url != row["link"])
          {
                $sql = "UPDATE " . $tablename . " SET link='$gitRepo->html_url' WHERE id='".$row["id"]."'";
                $conn->exec($sql)
          }

        }
      }
    }
  }

 ?>
