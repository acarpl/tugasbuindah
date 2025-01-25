<?php

  $db_server ="localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "db_satoekskul";
  $conn = "";
  
  try{  
     $conn = mysqli_connect($db_server,
                        $db_user,
      			$db_pass,
			$db_name);
}
catch(mysqli_sql_exception){
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create users table if not exists
$create_table_query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($create_table_query);
 ?>
