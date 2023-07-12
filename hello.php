<html>
    <body>
        <h1>Bill details</h1>

</body>
</html>
<?php
$name=$_POST['nam'];
$a=$_POST['hq'];
$b=$_POST['hw'];
$c=$_POST['he'];
$d=$_POST['hr'];
$e=$_POST['ht'];
$j=$_POST['hy'];
$k=$_POST['hu'];

$f=20;
$g=25;
$h=40;
$i=45;
$n=40;
$l=50;
$m=80;
//$j=40;
$s1=$f*$a;
$s2=$g*$b;
$s3=$h*$c;
$s4=$i*$d;
$s5=$n*$e;
$s6=$l*$j;
$s7=$m*$k;

$sum=0;




//$hell=0;
$mm=20;
$sum=$s1+$s2+$s3+$s4+$s5+$s6+$s7;
?>
<html>
    <head>
        <style>
            body{
                background-image:url(images/Mussoorie-in-Uttarakhand.webp);
                
        
                background-size:100%;
            }
            .he{
                background-image:linear-gradient(purple,transparent);
                margin:0 300px 0 380px ;
                display:block;
                height:max-content;
                width:max-content;
                margin-left:auto;
                margin-right:auto;
                border-radius:50px;
                padding:50px;
                float: left;
            }
            .more{
                background-image:linear-gradient(purple,transparent);
                margin:0 300px 0 380px ;
                display:block;
                height:max-content;
                width:max-content;
                margin-left:auto;
                margin-right:auto;
                border-radius:50px;
                padding:50px;
            }

            </style>
</head><body>
<div class="he">
    <h2><?php echo "Name :",$name;?></h2>
    <h2><?php if($a>0){echo"Tea          =",$a  ,"* 20 =",$f;}?></h2>
    <h2><?php if($b>0){ echo"Kullad Tea   =",$b ,"* 25 =",$g;}?></h2>
    <h2><?php if($c>0){echo"Cofee        =",$c  ,"* 40 =",$h;}?></h2>
    <h2><?php if($d>0){echo"Kullad Cofee =",$d  ,"* 45 =",$i;}?></h2>
    <h2><?php if($e>0){echo"Plain Maggi  =",$e  ,"* 40 =",$n;}?></h2>
    <h2><?php if($j>0){echo"Veg. Maggi   =",$j  ,"* 50 =",$l;}?></h2>
    <h2><?php if($k>0){echo"Pakodas      =",$k  ,"* 80 =",$m;}?></h2>

<h1><?php
echo "Total Bill =",$sum;
?></h1></div>
<div class="more">
    <h2>Other Sugessions</h2>
    <h2><?php if($a==0){echo"Tea          --Rate =",$f;}?></h2>
    <h2><?php if($b==0){ echo"Kullad Tea  --Rate =",$g;}?></h2>
    <h2><?php if($c==0){echo"Cofee        --Rate =",$h;}?></h2>
    <h2><?php if($d==0){echo"Kullad Cofee --Rate =",$i;}?></h2>
    <h2><?php if($e==0){echo"Plain Maggi  --Rate =",$n;}?></h2>
    <h2><?php if($j==0){echo"Veg. Maggi   --Rate =",$l;}?></h2>
    <h2><?php if($k==0){echo"Pakodas      --Rate =",$m;}?></h2>

</div>
</body>
</html>

