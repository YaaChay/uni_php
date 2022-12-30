<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>

<body>
  <?php
  // $first_name = "Kyaw";
  // $last_name = "Zaya";
  // $age = 21;
  // $num = 3;
  // echo "<p>", $first_name, " ", $last_name, "</p>";
  // echo "<p>", $first_name, $last_name, "</p>";
  // echo "<p>I am ", $age, " years old.</p>";
  // echo "<p>", $age + $num, "</p>";

  // $Reno = 360000;
  // $Pasadena = 138000;
  // $cityname = "Reno";
  // echo "<p>The size of $cityname is ${$cityname}</p>";
  // $cityname = "Pasadena";
  // echo "<p>The size of $cityname is ${$cityname}</p><br>";

  // define("RATE", 1.52);
  // echo "Rate variable ".RATE;
  // $US_dollars = 20;
  // $CA_dollars = $US_dollars * RATE;
  // echo "<br>Canadian dollars = ".$CA_dollars;

  // $checkvar = 15.25;
  // echo "<p> Type of varibale is ", var_dump($checkvar),"</p>";
  // echo "<p> Type of varibale $checkvar is ", gettype($checkvar),"</p>";

  // $widget = 5;
  // if ($widget >= 10) {
  //     echo "We have plenty of widgets in stock.";
  // } else if ($widget >= 5) {
  //     echo "Less than 10 widgets left. Time to order some more!";
  // } else {
  //     echo "Panic stations: Less than 5 widgets left! Order more now!";
  // }

  // for ($i = 0; $i < 60; $i++) {
  //     if ($i % 2 == 0) {
  //         if($i == 0){
  //             echo "<p>The number is $i and it's zero.";
  //         } else {
  //             echo "<p>The number is $i and it's even.";
  //         }
  //     } else {
  //         echo "<p>The number is $i and it's odd.";
  //     }
  // }

  // for ($i=1; $i <= 12 ; $i++) { 
  //     echo "Multiply by $i";
  //     for ($j=1; $j <= 12 ; $j++) { 
  //         echo $i," x ",$j," = ",$i*$j,"<br>";
  //     }
  //     echo "<br>";
  // }

  // for ($i=1; $i <=10 ; $i++) { 
  //     if($i == 1){
  //         echo $i;
  //     } else {
  //         echo "-",$i;
  //     }
  // }

  // $string = 'This variable name is $var1';
  // $string = "This variable name is \$var1";
  // echo '<br>' .$string;

  // $string = "Where is Sally\'s house."; 
  // $string = "Where is Sally's house."; 
  // $string = 'Where is Sally\'s house.'; 
  // echo '<br>' .$string;

  // $string = "aA";
  // $repeat = str_repeat($string, 5);
  // $replace = str_replace('a', 'z', $string);
  // echo $repeat,"<br>";
  // echo $replace;

  // $myNumber = 123.45;
  // printf("Binary: %b<br/>", $myNumber);
  // printf("Chatacter: %c<br/>", $myNumber);
  // printf("Decimal: %d<br/>", $myNumber);
  // printf("Scientific: %e<br/>", $myNumber);
  // printf("Float: %f<br/>", $myNumber);
  // printf("Octal: %o<br/>", $myNumber);
  // printf("String: %s<br/>", $myNumber);
  // printf("Hex(lower case): %x<br/>", $myNumber);
  // printf("Hex(upper case): %X<br/>", $myNumber);
  // printf("%06d", $myNumber);
  // printf("%06d", $myNumber);
  // printf("%06d", $myNumber);
  // printf("%06d", $myNumber);    

  // $importantDate = strtotime("tomorrow");
  // echo $importantDate;

  // $str = "the quizk brown fox jumps over the lazy dog.";
  // echo strtoupper($str), "<br>";
  // echo strtolower($str), "<br>";
  // echo ucfirst($str), "<br>";
  // echo ucwords($str), "<br>";

  // $address = array("name" => "Peter", "occupation" => "actor", "age" => "30");
  // echo $address["name"] . " is " . $address["age"] . " years old.<br>";
  // $address["name"] = "Peter";
  // $address["occupation"] = "actor";
  // $address["age"] = 30;
  // foreach($address as $key=>$value){
  //     echo "<b>$key :</b> $value<br>";
  // }

  //my-arry-practice
  // $students = array(
  //     "1" => array("name" => "Kyaw Kyaw", "address" => "Ann", "ph" => "0968723647324", "hobbies" => array("coding")),
  //     "2" => array("name" => "Mg Mg", "address" => "Sittway", "ph" => "0968723647324", "hobbies" => array("sleeping", "reading")),
  //     "3" => array("name" => "Mya Mya", "address" => "Kyauk Phyu", "ph" => "0968723647324", "hobbies" => array("eating", "reading")),
  //     "4" => array("name" => "Moe Moe", "address" => "Gwa", "ph" => "0968723647324", "hobbies" => array("coding", "football")),
  //     "5" => array("name" => "Su Su", "address" => "Man Aung", "ph" => "0968723647324", "hobbies" => array("coding", "traveling")),
  //     "6" => array("name" => "Lin Lin", "address" => "Maung Taw", "ph" => "0968723647324", "hobbies" => array("science", "reading")),
  //     "7" => array("name" => "Nyi Nyi", "address" => "Taunggoke", "ph" => "0968723647324", "hobbies" => array("science", "technology")),
  //     "8" => array("name" => "Nu Nu", "address" => "Myauk O", "ph" => "0968723647324", "hobbies" => array("technology", "reading")),
  //     "9" => array("name" => "Hla Hla", "address" => "Pok Taw", "ph" => "0968723647324", "hobbies" => array("football", "swimming")),
  //     "10" => array("name" => "Soe Soe", "address" => "Rethedaung", "ph" => "0968723647324", "hobbies" => array("football", "travelling")),
  // );
  // foreach ($students as $key => $value) {
  //     echo "{<br>";
  //     echo "<b>name: </b>", $value["name"], ",<br>";
  //     echo "<b>address: </b>", $value["address"], ",<br>";
  //     echo "<b>hobbies: </b>{";
  //     foreach($value as $key1=>$value1){
  //         if($key1 == "hobbies"){
  //             foreach($value1 as $key2 =>$value2){
  //                 echo " ",$value2,",";
  //             }
  //         }
  //     }
  //     echo "},<br>";
  //     echo "<b>ph: </b><a href=\"tel:", $value["ph"], "\">", $value["ph"], "</a><br>";
  //     echo "} <br>";
  // }

  //my-object-practice
  // class Student
  // {
  //   public $name;
  //   public $rollno;
  //   public $ac_year;
  //   public $address;
  //   public $cur_address;
  //   public $phone;
  //   public function __construct($name, $rollno, $ac_year, $address, $cur_address, $phone)
  //   {
  //     $this->name = $name;
  //     $this->rollno = $rollno;
  //     $this->ac_year = $ac_year;
  //     $this->address = $address;
  //     $this->cur_address = $cur_address;
  //     $this->phone = $phone;
  //   }
  //   public function getdata()
  //   {
  //     return $this->name . "<br>" . $this->rollno . "<br>" . $this->ac_year . "<br>" . $this->address . "<br>" . $this->cur_address . "<br>" . $this->phone . "<br>";
  //   }
  // }
  // $student1 = new Student("kyaw zaya", "1812036", "3rd year", "ann", "sittway", "09405999313");
  // echo $student1->getdata();
  // $student1 = new Student("yaachay", "1812036", "3rd year", "myauk-o", "sittway", "09405999313");
  // echo $student1->getdata();

  // function setup(){
  //   global $myGlobal;
  //   $myGlobal = "Hello there!";
  // }
  // function hello(){
  //   global $myGlobal;
  //   echo "$myGlobal<br>";
  // }
  // setup();
  // hello();

  // function resetCounter(&$n){
  //   $n = 0;
  // }
  // $num = 0;
  // $num++;
  // $num++;
  // $num++;
  // echo "$num<br>";
  // resetCounter($num);
  // echo "$num";

  // //Assignment1
  // $data = array("Soiphia" => "31", "Jacob" => "41", "William" => 39, "Ramesh" => "40");
  // asort($data);
  // echo "Associative array : Ascending order sort by value<br>";
  // foreach ($data as $key => $value) {
  //   echo "Age of $key is : $value<br>";
  // }
  // echo "<br>";
  // arsort($data);
  // echo "Associative array : Ascending order sort by Key<br>";
  // foreach ($data as $key => $value) {
  //   echo "Age of $key is : $value<br>";
  // }
  // echo "<br>";
  // ksort($data);
  // echo "Associative array : Descending order sort by Value<br>";
  // foreach ($data as $key => $value) {
  //   echo "Age of $key is : $value<br>";
  // }
  // echo "<br>";
  // krsort($data);
  // echo "Associative array : Descending order sort by Key<br>";
  // foreach ($data as $key => $value) {
  //   echo "Age of $key is : $value<br>";
  // }

  // exe1
  // function isPrimeNum($x)
  // {
  //   if ($x > 1) {
  //     if ($x == 2) {
  //       return "true";
  //     } else {
  //       for ($i = 2; $i < $x; $i++) {
  //         if ($x % $i == 0) {
  //           return "false";
  //         }
  //       }
  //       return "true";
  //     }
  //   } else if ($x == 1) {
  //     return "false";
  //   } else {
  //     return null;
  //   }
  // }
  // $num = 10;
  // if (isPrimeNum($num) == "true") {
  //   echo "$num is a prime number.";
  // } else if (isPrimeNum($num) == "false") {
  //   echo "$num is not a prime number.";
  // } else {
  //   echo "$num is neither prime nor composite.";
  // };

  // //exe2
  // function getlargestNum($x1, $x2, $x3)
  // {
  //   if ($x1 > $x2 && $x1 > $x3) {
  //     return $x1;
  //   } else {
  //     if ($x2 > $x1 && $x2 > $x3) {
  //       return $x3;
  //     } else
  //       return $x3;
  //   }
  // }
  // echo getLargestNum(10, 3, 4);
  // // //other-way-exe2
  // function getLargestNum($x1, $x2, $x3)
  // {
  //   $nums = array($x1,$x2,$x3);
  //   return max($nums);
  // }
  // echo getLargestNum(10, 3, 4);

  // //exe3
  // function sumArrays($x1, $x2, $x3, $x4, $x5)
  // {
  //   $result = $x1 + $x2 + $x3 + $x4 + $x5;
  //   return $result;
  // }
  // echo sumArrays(2,2,2,2,2);

  // // textbox
  // echo "<form action='index.php' metod='get'>
  //       <input type='text' name='name'><br>
  //       <input type='submit' value='Submit'>
  //       </form>";
  // $name = $_GET['name'];
  // echo $name ? $name : "Hello Word!";

  // echo "<form action='index.php' method='post'>
  //       Name:<input type='text' name='name'><br>
  //       Age:<input type='text' name='age'><br>
  //       <input type='submit' value='Submit'>
  //       </form>";
  // $name = $_POST['name'] ?? "";
  // $age = $_POST['age'] ?? "";
  // echo "Hello ", $name ? $name : "Kyaw Zaya", "<br>Your are ", $age ? $age : "21", " years old.";

  // // select
  // $dinner1="chicken";
  // $dinner2="fish";
  // echo "<form action='index.php' method='post'>
  //     <select name='dinner'>
  //       <option>Please choose one option</option>
  //       <option>$dinner1</option>
  //       <option>$dinner2</option>
  //     </select>
  //     <input type='submit' value='Submit'>
  //     </form>";
  // $choice=$_POST['dinner'] ?? "";
  // if ($choice=='chicken'){
  //   echo "You selected Chicken";
  // }
  // if ($choice=='fish'){
  //   echo "You selected Fish"; 
  // }

  // // radio
  // $dinner1 = "chicken";
  // $dinner2 = "fish";
  // echo "<form action='index.php' method='post'>
  //       <input type='radio' name='dinner' value='$dinner1' selected>$dinner1
  //       <input type='radio' name='dinner' value='$dinner2'>$dinner2
  //       <input type='submit' value='Submit'>
  //     </form>
  //     ";
  // $dinner = $_POST['dinner'] ?? "";
  // echo $dinner;

  // // checkbox
  // $dinner1 = "chicken";
  // $dinner2 = "fish";
  // echo "<form action='index.php' method='post'>
  //       <input type='checkbox' name='dinner[]' value='$dinner1' selected>$dinner1
  //       <input type='checkbox' name='dinner[]' value='$dinner2'>$dinner2
  //       <input type='submit' value='Submit'>
  //     </form>
  //     ";
  // $dinner = $_POST['dinner'] ?? "";
  // if (!empty($dinner)) {
  //   echo "Dinner :<input type='text' value='";
  //   foreach ($dinner as $key => $value) {
  //     if(end($dinner) == $value){
  //       echo "$value";
  //     } else {
  //       echo "$value, ";
  //     }
  //   };
  //   echo "'>";
  // }

  // // my practice
  // echo "_SERVER['PHP_SELF'] : ",$_SERVER['PHP_SELF'];
  // echo "<br>";
  // echo "_SERVER['GATEWAY_INTERFACE'] : ",$_SERVER['GATEWAY_INTERFACE'];
  // echo "<br>";
  // echo "_SERVER['SERVER_ADDR'] : ",$_SERVER['SERVER_ADDR'];
  // echo "<br>";
  // echo "_SERVER['SERVER_NAME'] : ",$_SERVER['SERVER_NAME'];
  // echo "<br>";
  // echo "_SERVER['SERVER_SOFTWARE'] : ",$_SERVER['SERVER_SOFTWARE'];
  // echo "<br>";
  // echo "_SERVER['SERVER_PROTOCOL'] : ",$_SERVER['SERVER_PROTOCOL'];
  // echo "<br>";
  // echo "_SERVER['REQUEST_METHOD'] : ",$_SERVER['REQUEST_METHOD'];
  // echo "<br>";
  // echo "_SERVER['REQUEST_TIME'] : ",$_SERVER['REQUEST_TIME'];
  // echo "<br>";
  // echo "_SERVER['QUERY_STRING'] : ",$_SERVER['QUERY_STRING'];
  // echo "<br>";
  // echo "_SERVER['HTTP_ACCEPT'] : ",$_SERVER['HTTP_ACCEPT'];
  // echo "<br>";
  // echo "_SERVER['HTTP_ACCEPT_CHARSET'] : ",$_SERVER['HTTP_ACCEPT_CHARSET'];
  // echo "<br>";
  // echo "_SERVER['HTTP_HOST'] : ",$_SERVER['HTTP_HOST'];
  // echo "<br>";
  // echo "_SERVER['HTTP_REFERER'] : ",$_SERVER['HTTP_REFERER'];
  // echo "<br>";
  // echo "_SERVER['HTTPS'] : ",$_SERVER['HTTPS'];
  // echo "<br>";
  // echo "_SERVER['REMOTE_ADDR'] : ",$_SERVER['REMOTE_ADDR'];
  // echo "<br>";
  // echo "_SERVER['REMOTE_HOST'] : ",$_SERVER['REMOTE_HOST'];
  // echo "<br>";
  // echo "_SERVER['SCRIPT_FILENAME'] : ",$_SERVER['SCRIPT_FILENAME'];
  // echo "<br>";
  // echo "_SERVER['SERVER_PORT'] : ",$_SERVER['SERVER_PORT'];
  // echo "<br>";
  // echo "_SERVER['SERVER_SIGNATURE'] : ",$_SERVER['SERVER_SIGNATURE'];
  // echo "<br>";
  // echo "_SERVER['PATH_TRANSLATED'] : ",$_SERVER['PATH_TRANSLATED'];
  // echo "<br>";
  // echo "_SERVER['SCRIPT_NAME'] : ",$_SERVER['SCRIPT_NAME'];
  // echo "<br>";
  // echo "_SERVER['SCRIPT_URI'] : ",$_SERVER['SCRIPT_URI'];
  // echo "<br>";
  
  // echo "<a href='index.php?name=AyeAye&age=14&state=Yangon&city=Myanmar'>go to next page</a>";
  // $name = $_GET['name'] ?? "";
  // $age = $_GET['age'] ?? "";
  // $state = $_GET['state'] ?? "";
  // $city = $_GET['city'] ?? "";
  // echo "<br>";
  // if(!empty($name) and !empty($age) and !empty($state) and !empty($city)){
  //   echo "Name= $name<br>";
  //   echo "Age= $age<br>";
  //   echo "State= $state<br>";
  //   echo "City= $city<br>";
  // }

  // echo "
  // <form action='index.php' method='post' enctype='multipart/form-data'>
  //   <label for='file'>Filename:</label>
  //   <input type='file' name='file' id='file'><br>
  //   <input type='submit' value='Upload File'>
  // </form>
  // ";
  // $file = isset($_GET['file']) ? $_GET['file'] : "";
  // if(!empty($file)){
  //   if($_FILES["file"]["error"] > 0){

  //   } else {
  //     echo "Upload: {$_FILES['file']['name']}<br> ";
  //     echo "Size: {$_FILES['file']['size']}<br> ";
  //     echo "Upload: {$_FILES['file']['tmp_name']}<br> ";
  //     echo "Upload: {$_FILES['file']['name']}<br> ";
  //   }
  // }

  // echo "
  // <form action='index.php' method='post'>
  // Name: <input type='text' name='name'><br><br>
  // Age: <input type='number' name='age'><br><br>
  // Email: <input type='email' name='email'><br><br>
  // Marital Status: 
  // <input type='radio' name='mstatus' value='single'>Single
  // <input type='radio' name='mstatus' value='married'>Married<br><br>
  // Password: <input type='password' name='password'><br><br>
  // Confirm password: <input type='password' name='conpassword'><br><br>
  // Team & condition<br><br>
  // <input type='checkbox' name='checkbox[]' value='agreed'>
  // I understand that information we enter will be viewable by other users of the system.<br><br>
  // <input type='submit' value='Submit'>
  // </form>
  // ";
  // echo "<br><br>";
  // $name = $_POST['name'] ?? "";
  // $age = $_POST['age'] ?? "";
  // $email = $_POST['email'] ?? "";
  // $mstatus = $_POST['mstatus'] ?? "";
  // if(!empty($name) and !empty($age) and !empty($email) and !empty($mstatus)){
  //   echo "
  //   Name: $name<br>
  //   Age: $age<br>
  //   Emailid: $email<br>
  //   Marital Status: $mstatus<br>
  //   ";
  // }

  echo "
  <b>Select a date:</b>
  <form action='index.php' method='post'>
    <select name='month'>
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
    <select name='day'>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
    </select>
    <select name='year'>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
      <option>2024</option>
      <option>2025</option>
    </select>
    <input type='submit' value='Submit'>
  </form>
  ";

  $month = $_POST['month'] ?? "";
  $day = $_POST['day'] ?? "";
  $year = $_POST['year'] ?? "";

  if(!empty($month) and !empty($day) and !empty($year)){
    echo "
    Month =$month<br>
    Day =$day<br>
    Year =$year
    ";
  }

  ?>
</body>

</html>