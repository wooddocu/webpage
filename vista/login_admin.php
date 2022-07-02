            <div class="containerlogin">
                <form action="#" method="post" class="loginboxs">
                    <input class="input_login"type="text" name="login_email" placeholder="E-mail" class="login" required>
                    <input class="input_login" type="text" name="login_password" placeholder="Password" class="login password" pattern="[a-zA-Z0-9$@.+-]{4,100}" required>
                    <button class="button_login" type="submit" class="button login">Login</button>               
                </form>
            	<?php
			if(isset($_POST['login_email']) && isset($_POST['login_password'])){
				require_once "../php/connect-clean-track.php";
				require_once "../php/send_login_admin.php";}
				?>
            </div>                