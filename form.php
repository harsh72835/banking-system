<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $receiver_name = $_POST['receivername'];
    $rupees = $_POST['money'];
    $desc = $_POST['desc'];
    try{
      $con = mysqli_connect("localhost","root","");
      mysqli_select_db($con,"bank_database");
      $sql = "insert into transaction(name,receiver_name,rupees,desc) values('".$name."','".$receiver_name."','".$rupees."','".$desc."')";
      mysqli_query($con,$sql);
      $msg = "<span style='color:green'>Dta inserted succesfully</span>";
    }
    catch(Exception $e){
      $msg = "<span style='color:red'>Dta insertion unsucccesful.</span>";
    }
  }
?>
<!-- https://github.com/harsh72835/banking-system.git -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>welcome to apna bank.</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Ese hi bank</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view all members.php">View all members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="transaction.php">Transaction</a>
            </li>
          </ul>
        </div>
      </nav>     
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 inner">
                <div class="form">
                  <!-- after submission it will get back to transaction history. -->
                  <form action="" method="POST" >
                  <table style="border: 1px solid black" align="center">
                    <tr >
                      <th colspan="2" align="center" >form details</th>
                    </tr>
                    <?php if(isset($msg))
                    {?>
                      <tr>
                          <td colspan="2" align="center" valign="down"><?php echo $msg;?></td>
                      </tr>
                    <?php } ?>
                    <tr>
                      <td><label for="username">username</label></td>
                      <td>   <input type="text" name="name" id="name" placeholder="name"></td>
                    </tr>
                    <tr>
                      <td><label for="receiver name">receiver name</label></td>
                      <td><input type="text" name="receivername" id="receivername" placeholder="reciever name"></td>
                    </tr>
                    <tr>
                      <td><label for="money">transferable money</label></td>
                      <td><input type="number" id="number" name="money" placeholder="money"></td>
                    </tr>
                    <tr>
                      <td><label for="description">description</label>
                      </td>
                      <td><input type="text" name="desc" id="desc" class="desc" placeholder="description"></td>
                    </tr>
                    <tr >
                      <td colspan="2" align="center">
                        <a href="#viewallteam members"><button type="submit" class="btn btn-dark">Submit</button></td></a>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="inner-footer col-lg-12 ">
                <p class="footer">
                   developed by @harsh patel as a part of internship at sparks foundation.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>