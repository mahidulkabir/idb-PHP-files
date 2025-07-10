<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>LogIn :: Landing Page</title>
</head>
<body>
    <div class="flex h-screen bg-indigo-200">
<div class="w-full max-w-xs m-auto bg-indigo-100 rounded p-5">   
      <header>
        <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
      </header>     
      <form method="POST">
        <div>
          <label class="block mb-2 text-indigo-500" for="username">Create Username</label>
          <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="text" name="username" >
        </div>
        <div>
          <label class="block mb-2 text-indigo-500" for="password">Create Password</label>
          <input class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" type="password" name="password" >
        </div>
        <div>          
          <input class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded" type="submit" value="Register" name="btn_reg_submit">
        </div>       
      </form>  
      <footer class="text-center">
        
        <a class="text-indigo-700 hover:text-pink-700 text-sm  " href="./index.php">Go to Login Page </a>
      </footer>   
    </div>
</div>
<?php
class LoginForm{
    private $userName;
    private $password;
    private static $file_Path_for_userName_password = "reg_userName_Pass.txt";

    function __construct($_userName,$_password)
    {
        $this->userName = $_userName;
        $this->password = $_password;

    }
    public function csv(){
        return $this->userName.",".$this->password.PHP_EOL;
    }
    public function saveData(){
      file_put_contents("reg_userName_Pass.txt",$this->csv(),FILE_APPEND);
    }
    
}
if(isset($_POST["btn_reg_submit"])){
  $userName = $_POST["username"];
  $password = $_POST["password"];
  $newUser = new LoginForm($userName,$password);
  $newUser->saveData();
}
?>
</body>
</html>