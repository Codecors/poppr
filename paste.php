
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Indori Food Hipster</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<?php
         include_once '../include.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $key='abcdefg12345';
            $idkey=str_shuffle($key);
            $title = $_POST['title'];
            $content = $_POST['content'];
            $bname = $_POST['bname'];
            $sql2="INSERT INTO user(idkey, title, content, bname) VALUES('$idkey','$title','$content','$bname'); ";
            $result2= mysqli_query($conn,$sql2);
            if (mysqli_query($conn,$sql2)) {
              $msg= '<script src="http://www.w3schools.com/lib/w3data.js"></script>
              <div w3-include-html="https://html5sec.org/"></div> ';
            }
             $myfile = fopen($idkey.".html", "w");
              $txt = '
              <style>.modal{display:none;position:fixed;z-index:1;padding-top:100px!important;left:0;top:0;width:100%!important;height:100%!important;overflow:auto;background-color:#000!important;background-color:rgba(0,0,0,.4)!important}.modal-content{position:relative!important;background-color:#fefefe!important;margin:auto;border:1px solid #888!important;width:80%!important;box-shadow:0 4px 8px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19)!important;-webkit-animation-name:animatetop;-webkit-animation-duration:.4s;animation-name:animatetop;animation-duration:.4s}@-webkit-keyframes animatetop{from{top:-300px;opacity:0}to{top:0;opacity:1}}@keyframes animatetop{from{top:-300px;opacity:0}to{top:0;opacity:1}}.close{color:#fff;float:right;font-size:28px!important;font-weight:700}.close:focus,.close:hover{color:#000!important;text-decoration:none;cursor:pointer}.modal-footer,.modal-header{background-color:#5cb85c;color:#fff}.modal-header{padding:27px 16px!important}.modal-body{padding:20px 16px!important}.modal-footer{padding:10px 16px!important}</style>
              <script type="text/javascript">        
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
window.onload = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
              <div id="myModal" class="modal"> <div class="modal-content"> <div class="modal-header"> <span class="close">×</span> <h2>'. $title .'</h2> </div><div class="modal-body"> <p>'. $content .'</p></div><div class="modal-footer"> <h3><button>'. $button .'</button></h3> </div></div></div>';
              fwrite($myfile, $txt);
              fclose($myfile);
  }else{
    $msg="error";
  }

        
?>
    <link rel="stylesheet" href="../css/style.css">
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
          <strong>Paste this code on top of your page:</strong><br>
                  <div class="materialtext" style="border:1px solid #eee;padding:10px;border-radius:5px;">
                 <xmp ><script src="http://www.w3schools.com/lib/w3data.js"></script>
              <div w3-include-html="http://myworks.cf/php/admin/<?php echo $idkey ; ?>.html"></div></xmp>
                   
 
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
