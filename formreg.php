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