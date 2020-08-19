<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="c.css">
  <script>
       var modal = document.getElementById('id01');

       window.onclick = function(event) {
           if (event.target == modal) {
               modal.style.display = "none";
           }
       }
   </script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script><script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
</head>
<body style="background-color: rgba(169,228,247,1) !important;"><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "purab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM user ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $idd = $row["id"];
  }

} else {
  echo "0 results";
}

$conn->close();
?><div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thank you for registering<br> your registration id is <?php echo $idd;?> and venue is<?php echo $v;?> </h4>
            </div>

            </div>
        </div>
    </div>
<div>
  <a href="o.html">Redirect</a>
</div>
</body></html>
