<?php
  if(isset($_POST['password'])){
    if($_POST['password'] == 'typexv'){
        // echo "correct";
        header('Location: '.$newURL);
        header("Location: tickets.php");
        die();
        exit;
    } else{
    }
  }
?>
<!DOCTYPE html>
<html>
  <style media="screen">
    body{
      color: white;
      font-size: 50px;
    }
    .formDiv{
      padding-top: 20%;
      text-align: center;
    }
    .form{
        width:100%;
        padding-bottom: 1%;
        height: 50px;
    }
    .input{
      width: 20%;
      height: 50%;
    }
    /* Media queries */
    /* Mobile */
    @media only screen and (max-device-width: 800px){
      html{
        -webkit-text-size-adjust: 180%;
      }
      body {
        display:inline;
    }
    .formDiv{
      padding-top: 60%;
      text-align: center;
    }
    .form{
        width:100%;
        padding-bottom: 1%;
        height: 100px;
    }
    .input{
      width: 50%;
      height: 50%;
    }

    /* Responsive desktop */
    @media screen and (max-width: 840px){
      body {
        display: inline;
      }
      .formDiv{
        padding-top: 60%;
        text-align: center;
      }
      .form{
          width:100%;
          padding-bottom: 1%;
          height: 50px;
      }
      .input{
        width: 50%;
        height: 50%;
      }

    }
  }
  </style>

  <body bgcolor="black";>
    <div class="formDiv">
      <img src="" alt="">
      <form class="form" action="members.php" method="POST">
        <input class="input"type="password" name="password">
      </form>
    </div>
  </body>

</html>
