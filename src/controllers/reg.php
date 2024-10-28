<?php 

   //recoger datos
   if(!empty($_POST['email'])
   && !empty($_POST['password'])){
   $email=filter_input(INPUT_POST,'email');
   $password=filter_input(INPUT_POST,'password');
   //crear conexion
   $sql="INSERT INTO users(email,password) VALUES(:email,:password)";
   $hash=password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
   $stmt=$pdo->prepare($sql);
   if($stmt->execute([':email'=>$email,':password'=>$hash])){
        header('Location:login');
    }
   }header('Location:register');
