<?php
   // use rafaelwendel\phpsupabase\src\Service;
    $service = new PHPSupabase\Service(
        "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im5xa2ZzcmRsa25ncGxrZmdydHF3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE2NjYwODY3MTUsImV4cCI6MTk4MTY2MjcxNX0.l9UDOTBtQeptG9vzoKXZ3J2Y6FxSPCjwRMqRx5D6H0Y", 
        "https://nqkfsrdlkngplkfgrtqw.supabase.co/auth/v1/"
    );
    $auth = $service->createAuth();

    // try{
    //     $user_metadata = [
    //         'name' => 'Lebron James',
    //         'age' => '34'
    //     ];
    //     $auth->createUserWithEmailAndPassword('lebron@email.com', 'LebronPassword', $user_metadata);
    //     $data = $auth->data(); // get the returned data generated by request
    //     echo 'User has been created! A confirmation link has been sent to the '. $data->email;
    // }
    // catch(Exception $e){
    //     echo $auth->getError();
    // }
    var_dump($auth);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Supabase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\saas\resources\views/supabase.blade.php ENDPATH**/ ?>