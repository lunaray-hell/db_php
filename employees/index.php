<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
         require_once('connect.php');

        //  $query = $conn->query('SELECT * FROM departments');
         $query = $conn->query('SELECT * FROM dept_manager');
        //  $data = $query->fetch(); //the first record
         $data = $query->fetchALL(); //all the records
        //  print_r($data);
    ?>

    <?php
         foreach($data as $key => $value) {
            echo "$key => " . $value['emp_no'] . " => " . $value['dept_no'] . " => " . $value['from_date'] . " => " . $value['to_date'] . '<br>';
         } 
    ?>
      <p>
           <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore fuga eos at fugit ipsam soluta, ut praesentium! Expedita quasi delectus dicta, facere maxime praesentium totam perferendis iure quidem, architecto nobis? -->
      </p>
</body>
</html>