<?php
$min=1000000000;
$max=9999999999;

if(isset($_POST['submit']))
  {
    $user=htmlentities($_POST['name']);
    $email=htmlentities($_POST['email']);
    $numb=htmlentities($_POST['num']);
    echo 'WELCOME '.$user.'<br>';

    if(!empty($user) && !empty($email) && !empty($numb)){
        if(!(filter_var($numb ,FILTER_VALIDATE_INT,array("options"=>
        array(
          "min_range"=>$min,
          "max_range"=>$max
        )))))
        {
        echo "<h1 style='color:red; padding:20px; border-radius:5px;background-color:green;margin-left:200px;margin-right:200px'>enter correct number</h1>";
        }
        $toemail='priyankagandhi996@gmail.com';
        $sub="contact form request from ".$user;
        $body="<h2> contact request<h2>
          <h2>NAME :".$user."<br>
          <h2>email :".$email."<br>
          <h2>contact info :".$numb."<br>"
          ;
          $headers='Mine-Version:1.0'.'\r\n';

    }
    else {
      echo "<h1 style='color:red; padding:20px; border-radius:5px;background-color:green;margin-left:200px;margin-right:200px'>enter all entries</h1>";
    }
  }


?>
<!doctype html>
<html><head>
<title>CONTACT FORM
</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>CONTACT FORM
</p>

<div id="card">
  <img src="bg.jpg" alt="image not available" >
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
  NAME :<input type="text" name="name" placeholder="your name" value="<?php echo isset($_POST['name'] ) ? $user:''; ?>"><br>
  EMAIL :<input type="email" name="email" placeholder="your email" value="<?php echo isset($_POST['email'] ) ? $email:'' ;?>"><br>
  NUMBER :<input type="text" name="num" placeholder="your mobile number" value="<?php echo isset($_POST['name'] ) ? $numb:''; ?>" ><br>
  <input type="submit" value="click me !!" name="submit">
</form>
</div>
</body>
</html>
