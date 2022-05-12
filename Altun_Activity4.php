<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$error = "There is no information";
$name = $username = $pwd = $address = $country = $zip = $email = $gender = $comment= $language= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = test_input($_POST["name"]);
    $username = test_input($_POST["username"]);
    $pwd = test_input($_POST["pwd"]);
    $address = test_input($_POST["address"]);
    $country = test_input($_POST["country"]);
    $zip = test_input($_POST["zip"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $language = test_input($_POST["language"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Registration Form</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>"><br><br>
  Username: <input type="text" name="username" value="<?php echo $username;?>"><br><br>
  Password: <input type="password" name="pwd" value="<?php echo $pwd;?>"><br><br>
  Address: <input type="text" name="address" value="<?php echo $address;?>"><br><br>
  Country: <select name="country">
    <option selected="" value="Not Provided">(Please select a country)</option>
    <option value="USA">USA</option>
    <option value="England">England</option>
    <option value="Germany">Germany</option>
    </select><br><br>
  ZIP Code: <input type="text" name="zip" value="<?php echo $zip;?>"><br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br><br>
  Sex:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 
  <br><br>
  Language: <input type="checkbox" name="language"  value="English"/><span>English</span>
            <input type="checkbox" name="language"  value="French"/><span>French</span>
            <input type="checkbox" name="language"  value="German"/><span>German</span><br><br>
  About: <textarea name="comment" rows="4" cols="20"><?php echo $comment;?></textarea><br><br>
  <input type="submit" name="submit" value="Submit" style="position: absolute; left: 60px;">  
</form>

<?php
echo "<h2>Preview:</h2>";
if (empty($_POST["name"])) {
    echo $error;
}
echo $name;
echo "<br>";
if (empty($_POST["username"])) {
    echo $error;
}
echo $username;
echo "<br>";
if (empty($_POST["pwd"])) {
    echo $error;
}
echo $pwd;
echo "<br>";
if (empty($_POST["address"])) {
    echo $error;
}
echo $address;
echo "<br>";
if (empty($_POST["country"])) {
    echo $error;
}
echo $country;
echo "<br>";
if (empty($_POST["zip"])) {
    echo $error;
}
echo $zip;
echo "<br>";
if (empty($_POST["email"])) {
    echo $error;
}
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
if (empty($_POST["language"])) {
    echo $error;
}
echo $language;
echo "<br>";
if (empty($_POST["comment"])) {
    echo $error;
}
echo $comment;
?>

</body>
</html>