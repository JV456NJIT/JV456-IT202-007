<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])){
    $email = se($_POST, "email", "", false);
    $password = se($_POST,"password","",false);
    $confirm = se($_POST,"confirm","",false);

    //TODO 2: add PHP Code

    $hasError = false;
    if (empty($email)){
        flash("Email must not be empty");
        $hasError = true;
    }
    //sanitize
    //$email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $email = sanitize_email($email);
    //validate
/*    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        flash( "Invalid email address";
        $hasError = true;
    }*/
    if(!is_valid_email($email)){
        flash("Invalid email address");
        $hasError = true;
    }if (empty($password)){
        flash("Password must not be empty");
        $hasError = true;
    }if (empty($confirm)){
        flash("Confirm password must not be empty");
        $hasError = true;
    }if (strlen($password) < 8){
        flash("Password must be at least 8 characters long");
        $hasError = true;
    }if (strlen($password) > 0 && $password !== $confirm){
        flash("Password must match");
        $hasError = true;
    }if (!$hasError){
        //flash( "Wecome, $email";
        $hash = $password_hash($password, PASSWORD_BCRYPT);
        $db=getDB();
        $stmt = $db0->prepare("INSERT INTO Users(email, password) VALUES(:email, :password");
        try{
            $r = $stmt->execute([":email"=>$email, ":password"=> $hash]);
            flash("Succesfully regisered!");
        }catch (Exception $e){
            flash("There was an error resgistering.<br>");
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}
?>
<?
require(__DIR__ . "/../../partials/flash.php");
?>