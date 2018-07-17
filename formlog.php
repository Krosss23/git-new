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