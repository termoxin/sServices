<?php 

require __DIR__ . '/../header.php';

?>

<header>
    <h3 class="ui block header">
        Mini services
    </h3>
</header>

<?php if(isset($errors)) {  ?>

    <div class="ui negative message">
        <div class="header">
            That offer has expired
        </div>
    </div>

<?php } ?>

<main class="main">
    <h4 class="ui horizontal divider header">
			<span>
				Login
			</span>
    </h4>
    <form class="ui form" method="GET" name="login_form">
        <div class="field">
            <label>Login</label>
            <input type="text" name="name_l" id="login_auth" placeholder="Login">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password_l" id="password_auth" placeholder="Password">
        </div>
        <button class="ui button green" id="login" type="submit">Sign in</button>
    </form>
    <h4 class="ui horizontal divider header">
			<span>
				Register
			</span>
            <div class="status">
                <div class="ui positive message">
                  <div class="header">
                    Вы успешно зарегистрировались
                  </div>
                </div>
            </div>
    </h4>
    <form class="ui form">
        <div class="field">
            <label>Login</label>
            <input type="text" name="name" id="login_register" placeholder="Login">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" id="password_register" placeholder="Password">
        </div>
        <button class="ui button green" type="submit" id="register_user">Sign up</button>
    </form>
</main>
<?php require __DIR__ . '/../footer.php'?>