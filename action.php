<?php
if(isset($_GET['submit'])) {

    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    // $date = $_GET['date'];
    $gender = $_GET['gender'];
    $country = $_GET['country'];

    $data= [$name, $email, $password, $gender, $country];

    //write to file//
    $file = fopen('file.csv', 'ra+');
    while (!)
    
    // fputcsv($file, $data);
    // fclose($file);

    // echo $name . " " . $email . " " .$password . " " . $gender . " " .$country;

}else{
    echo "No data";
}

 print_r($data);

?>