<div class="column-group gutters">
    <div class="all-30 small-100 tiny-100">
    </div>
    <div class="all-40 small-100 tiny-100">
        <h2>Login</h2>

        <?php if ($login_failed) : ?>
            <div class="ink-alert basic error" role="alert">
                <button class="ink-dismiss">&times;</button>
                <p><b>Login failed:</b> Invalid user and/or password</p>
            </div>
        <?php endif; ?>

        <form class="ink-form" action="/admin/login.php" method="post">
            <div class="control-group required">
                <label for="user">User</label>
                <div class="control">
                    <input id="user" name="user" type="text">
                </div>

                <label for="password">Password</label>
                <div class="control">
                    <input id="password" name="password" type="password">
                </div>
            </div>
            <div class="control-group rightalign">
                <input class="ink-button blue" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="all-30 small-100 tiny-100">
    </div>
</div>
