<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Indori Food Hipster</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link rel="stylesheet" href="../css/style.css">
    <?php
     include_once '../include.php';
      session_start();
      $user_check = $_SESSION['luser'];
      if (isset($_SESSION['luser'])) {
        $sql="SELECT * FROM register";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
          $name = $row['name'];
          $email= $row['email'];
          $id = $row['id'];
          $website = $row['website'];
          $password = $row['password'];
          
      } else {
        header('Location: ../login/');
      }
    }
      
    ?>
    
  <!-- Material Design Lite -->
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
  <!-- Material Design icon font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Dashboard</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Dashboard</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Orders</a>
        <a class="mdl-navigation__link" href="price.php">Prices</a>
        <a class="mdl-navigation__link" href="">Details</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="wrap">
    <div class="col-md-8">
      <form action="../admin/paste.php" method="post"> 
        <div class="materialtext">
          <input type="text" name="title" placeholder="Name" required>
            <hr><br>
            <label>Modal Title</label></div><br>
            <div class="materialtext">
            <textarea type="text" name="content" row="10" placeholder="You can put HTML, CSS also" required></textarea>
            <hr><br>
            <label>Modal Content</label></div><br>
            <div class="materialtext">
            <input type="text" name="bname" placeholder="Name" required>
            <hr><br>  
            <label>Modal Button Name</label></div><br>
          <br><button type="submit" value="submit" class="btn-send">Submit</button>
                </form> 
        </div>
    </div>

 </div>
    </main>
  </div>  </div>
    
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>

        <script src="../js/index.js"></script>

  </body>
</html>
