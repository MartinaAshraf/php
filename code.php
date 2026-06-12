<?php /*echo "ff" ; كومنت*/  ?>
<?   ?>
<script language="PHP">   </script> # دا بيتكتب جواه الكود بتاع php
<body><? echo "" ?> </body> // جوه html 
<?php
$x = 5;
$y = 10;
echo $x.$y; //510
$name="ma";
echo "My name is.$name"; //My name is.ma
echo 'My name is.$name'; # My name is.$name
echo "My name is $name"; //My name is ma
echo "My name is. <b>$name</b>"; # My name is ma الاسم هيكون بولد
$fn="ma";
$ln="rt";
$name = $fn.$ln;
echo "My name is $name"; # My name is mart
echo "My name is $fn .$ln"; # My name is ma .rt
define('pi',3.14); // define("pi",3.14); هي هي
echo pi; // 3.14
echo $pi;// error warning
print ("pi"); // pi
echo"<b> Fianlly the final </b> <br> ". 5-4 ."<br> Fainaly   ";
echo "<form>
<input type=text > <br> <!single line text = \"text\" //20 character?>
<input type=radio> <!one of many limited options!>
<input type=checkbox> <!zero or more limited options>
<input type=radio name=aa value='html'> html <!الفاليو مينفعش يبقي فالاسم مسافات >
<input type=radio name=aa value=js> js <! عشان اظهر الاختيار لازم اكتبه جمب البوتم>
<input type=text action=exam.php method='post'> <br> <!بوست لو من غيري سمول لو ب' تبقي كابتل >
<input type=submit value='submit'> <!هيظهر الزرار و مكتوب عليه الفاليو كدا>
</form>";


$x=15;
if ($x>10) {
    echo "x is greater than 10";
}
elseif ($x>10) {  // Elseif = elseif
    echo "x is greater than 10";
}
else {  // Else = else
    echo "x is less than or equal to 10";
}
if ($x>10) {
    if ($x>20) {
        echo "x is greater than 20";
    }
    else {
        echo "x is greater than 10 but less than or equal to 20";
    }
}
else {
    echo "x is less than or equal to 10";
}

$age = 20;
                   # true       #false
echo ($age >= 18) ? "Adult" : "Minor"; //ternary operator
//لو الشرط True نفذ الجزء بعد ?
//لو الشرط False نفذ الجزء بعد : 


/*while (TRUE) { // TRUE = true = True
print("While loop is executed");
}
*/ # infinite loop
$a=10;
 do {
    print "$a<br>"; //هيطبعها مره واحده بس عشان الشرط متحققش
$a+=$a;
} while ($a < 50);

$colors = array("Red", "Green", "Blue");

foreach($colors as $color) //formalized method
{
    echo $color ; // Red Green Blue
}
foreach($colors as $key => $value)
{
    echo $key . " => " . $value ; // 0 => Red 1 => Green 2 => Blue
}

$array= array("m","a","r","t","i","n","a");
echo "$array[0]"; // m
echo"<pre>"; //عشان يطبع كل اندكس فالاراي ف سطر لوحده 
print_r($array); 
/* Array
 (
 [0] => m
  [1] => a 
  [2] => r 
  [3] => t 
  [4] => i 
  [5] => n 
  [6] => a 
  )*/
echo"</pre>";

$x=array("m");
$y=array ("a");
$z=array_merge($x,$y); //دمج الاراي
print_r($z); // Array ( [0] => m [1] => a )
$reverse = array_reverse($z); //عكس الاراي
print_r($reverse); // Array ( [0] => a [1] => m )
$pop = array_pop($z); //بيشيل اخر عنصر من الاراي
print_r($z); // Array ( [0] => m )
print_r($pop); // a
$shift= array_shift($reverse); //بيشيل اول عنصر من الاراي
print_r($reverse); // Array ( [0] => m )
print_r($shift); // a
array_push($z,"martina"); //بيضيف عنصر في اخر الاراي
print_r($z); // Array ( [0] => m [1] => martina )
array_unshift($z,"ma"); //بيضيف عنصر في اول الاراي   
print_r($z); // Array ( [0] => ma [1] => m [2] => martina )
print count($z); // 3
$curent = current($z); //بيجيب اول عنصر في الاراي
print($curent); // ma  print_r($curent); // ma

$x=4;
$y=isset($x); // true
echo $y; // 1 بتقولي العنصر موجود ولا لا 
echo isset($x); // 1
echo isset($z[3]); //  ف هنا مش هتطبع حاجه ولا حتي ايرور false هنا مفيش ف ايلمنت 3 اي عنصر 2 هو اخر عنصر في الاراي
$r;
echo empty($r); // true يعني هيرجع 1
echo empty($x); // false يعني مش هيرجع حاجه عشان x فيها قيمه
is_numeric($x); // 1
is_numeric($y); // مش هتطبع حاجه عشان فولس
$e="32";
is_numeric($e); // 1
$f="ma";
is_numeric($f); // مش هتطبع حاجه عشان فولس
echo rand(); // بيطلع رقم عشوائي
echo rand(1,100)."<br>"; // بيطلع رقم عشوائي بين 1 و 100
Echo round(3.14); // 3 بيقرب لاقرب رقم صحيح 
echo round(3.5); // 4
echo round(3.49); // 3  
echo round(3.14159,2); // 3.14 بيقرب لاقرب رقم عشري بعد الفاصله ب 2 خانات
echo sqrt(16); // 4 الجذر التربيعي
echo pow(2,3); // 8 الاس 2 مرفوعه للاس 3
echo max(1,5,3); // 5 بيطلع اكبر رقم = echo (max(1,5,3)); 5
echo min(1,5,3); // 1 بيطلع اصغر رقم = echo (min(1,5,3)); 1

echo date("Y"); // 2024 بيطبع السنة
echo date("m"); // 06 بيطبع الشهر   
echo date("d"); // 17 بيطبع اليوم
echo date("l"); //  و اول حرف كابتل Tuesday بيطبع اليوم بالانجليزي
echo date("j/n/y"); // 11/6/24 بيطبع اليوم والشهر والسنة بدون اصفار
echo date("Y-m-d"); // 2024-06-17 بيطبع السنة
echo date("h:i:s A"); // 12:00:00AM بيطبع الوقت
echo date("h:i:s a"); // 12:00:00am بيطبع الوقت
ECHO date("h:i:s");// 12:00:00 بيطبع الوقت
/*header( "Location: page2.html" ); // بيحولك لصفحة تانية
header( "Content-Type: application/pdf" ); // بقول للمتصفح نوع الصفحه اللى هيعرضها
header("content-type: application/html"); //بخلي المتصفح يعرض الصفحة على انها html
*/
function sum($x,$y) {
    return $x+$y;
}
echo sum(5,"10"),"<br>"; // 15
function _ints(int $x,int$y) {
    return $x+$y;
}
echo sum(5,"10"),"<br>"; // 15

$con = mysqli_connect( "localhost", "root",123); #connect 1
if (!$con){die(' Error: Connection Failuer');} # اتأكد الاتصال صح ولا لا 

mysqli_select_db($con,$dbn);  #select db 2
# for
$sql = "create table Persons(  
FirstName varchar(15),
LastName varchar(15), 
Age int)";
mysqli_query($con,$sql);

session_start(); //المفروض فالاول تكون قبل اى echo
 echo session_id(); // كل سيشن ليها رقم مميز ف دي بتطبعلي رقم السيشن اللى واخده من السيرفر
$_SESSION['u']=NULL;
$_SESSION['p']=NULL;


 $_SESSION['u'] = '1';
unset($_SESSION['u']); // delete session
//To prevent the hacker from entering the site
if($_SESSION['u']==NULL && $_SESSION['p']== NULL)
     {
    header('location:login.php');
    }
//To prevent any user from entering the admin page (admin, 123)
if($_SESSION['u']<>'admin' && $_SESSION['p']<>'123') 
    {header('location:login.php');}
?>







