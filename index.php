<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru"> 
	<!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title>Регистрация в Библиотеке №19</title>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>
    <?php
function db_store($username,$lastname,$email,$age,$gender,$passwordc,$country,$zhanr)
 {
  $db_name="db.txt";
  $ff=fopen($db_name,"w+");
   $str=$username.";".$lastname.";".$email.";".$age.";".$gender.";".$passwordc.";".$country.";".$zhanr."\n";
   fwrite($ff,$str);
  fclose($ff);
 }
function db_search($email,$passwordc)
 {
  $db_name="db.txt";
  $a=file($db_name);
  foreach ($a as $kk=>$vv)
  {
   $c=explode(";",$vv);
   {
     $d['username']=$c[0];
     $d['lastname']=$c[1];
     $d['email']=$c[2];
     $d['age']=$c[3];
     $d['gender']=$c[4];
     $d['passwordc']=$c[5];
     $d['country']=$c[6];
     $d['zhanr']=$c[7];
     $b[]=$d;
    }
  }
  return $b;
 }



    ?>
    <body>
        <div class="container">
            <header>
                <h1>Форма регистрации и входа<span> Библиотеки № 19</span></h1>
				
			</header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <?php //подключение формы входа
                        require_once("formlog.php");
                        ?>
						
        <?php //подключение формы регистрации
        require_once("formreg.php")
        ?>
                                <p class="change_link">  
									Уже зарегистрированы ?
									<a href="#tologin" class="to_register"> Войдите на сайт </a>
								</p>        
							</form>
						</div>
					</div>
				</div>  
			</section>
		</div>
        <?php
 
if ($_POST['reg']=="Регистрация")
{
 db_store($_POST['lastname'],$_POST['username'],$_POST['email'],$_POST['age'],$_POST['gender'],$_POST['passwordc'],$_POST['country'],$_POST['zhanr']);
}
else if ($_POST['log']=="Вход")
{
 $b=db_search($_POST['email'],$_POST['passwordc']);
echo "<br><hr><br>";
}



?>
        <script>
    
    var pass1 = document.getElementById('passwordc');
    var pass2 = document.getElementById('cpassword');
    pass2.oninput=function (element) 

    {
       if (pass1.value != this.value)
       {
        console.log(
            pass1.value+" "+this.value
            );
         document.getElementById('submit1').disabled;
       } 
    }

</script>
	</body>
</html>