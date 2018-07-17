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
  $ff=fopen($db_name,"a+");
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
                        <div id="login" class="animate form">
                            <form  action="log.php" method="POST"> 
                                <h1>Вход</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Ваш e-mail</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="example@example.com"/>
								</p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Ваш пароль </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="например 123456" /> 
								</p>
                                <input type=hidden name=log value=log>
                                <p class="login button"> 
                                    <input type="submit" value="Войти" /> 
								</p>
                                <p class="change_link">
									Не зарегистрированы еще ?
									<a href="#toregister" class="to_register">Присоединяйтесь</a>
								</p>
							</form>
						</div>
						
        <div id="register" class="animate form">
            <form  action="log.php" method="POST"> 
                    <h1> Регистрация </h1> 
            <p> 
                <label for="username">Ваше имя: </label>
                <input type="text" name="username" id="username" placeholder="Имя" />
            </p>
            <p>
                <label for="lastname">Ваша Фамилия: </label>
                <input type="text" name="lastname" id="lastname" placeholder="Фамилия" />
            </p>
            <p>
                <label for="passwordc">Пароль:</label>
                <input type="password" class="passwordc" required="required" name="passwordc" id="passwordc" placeholder="Пароль" />
            </p>
            <p>
                <label for="cpassword">Повторить пароль:</label>
                <input type="password" class="cpassword" required="required" name="cpassword" id="cpassword" placeholder="Пароль" />
            </p>
            <p>
                <label for="email">Ваш email:</label>
                <input type="email" name="email" id="email" placeholder="Email" />
                </p>
                <p>
                <label for="age">Ваш возраст:</label>
                <select id="age" name="age">
                    <option> 0 - 17</option>
                    <option>18 - 25</option>
                    <option>26 - 49</option>
                    <option>50+</option>
                </select>
                </p>
                <p>
                <label for="gender">Ваш пол:</label>
                <select id="gender" name="gender">
                    <option>Мужчина</option>
                    <option>Женщина</option>
                </select>
            </p>
            <p>
                <label for="country">Ваша страна:</label>
                <select id="country" name="country">
                    <option>Россия</option>
                    <option>Украина</option>
                    <option>Белоруссия</option>
                    <option>Казахстан</option>
                    <option>Другая</option>
                </select></p>
                <p>
                <label for="zhanr">Любимый жанр книг:</label>
                <select name="zhanr" id="zhanr">
 <option value="Детям">Детям</option>
 <option value="Документальная литература">Документальная литература</option>
 <option value="Искусство">Искусство</option>
 <option value="Компьютерная литература">Компьютерная литература</option>
 <option value="Научная литература">Научная литература</option>
 <option value="Поэзия">Поэзия</option>
 <option value="Любовные романы">Любовные романы</option>
 <option value="Приключения">Приключения</option>
 <option value="Боевик">Боевик</option>
 <option value="Детектив">Детектив</option>
 <option value="Фэнтези">Фэнтезия</option>
 <option value="Фантастика">Фантастика</option>
                </select>
								</p>
                                <input type=hidden name=reg value=registred>
                                <p class="signin button"> 
									<input type="submit" value="Регистрация" name=submit1 id=submit1 class=submit1/>  
								</p>
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