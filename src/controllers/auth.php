<?php

    //recoger datos
    if(!empty($_POST['email'])
        && !empty($_POST['password'])){
        $email=filter_input(INPUT_POST,'email');
        $password=filter_input(INPUT_POST,'password');
        //crear conexion
        $sql="SELECT * FROM users WHERE email=:email LIMIT 1";
        $stmt=$pdo->prepare($sql);
        if($stmt->execute([':email'=>$email])){
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $user=$result[0];
            //verificar password
            
            if(password_verify($password,$user['password'])){
                
                $_SESSION['user']=$user;
                http_redirect('dashboard',302);
            };
            
        }

    }else{
        http_redirect('login',302);
    }

    //validar

    //determinar si dashboard o repetimos en login
