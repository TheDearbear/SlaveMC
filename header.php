<header class="main">
            <div class="main-inner">
                <a href="<?php echo esc_url(site_url('/?p=12'))?>" class="link-header">Shop</a>
                <a href="<?php echo esc_url(site_url('/?p=1'))?>" class="logo-btn"><img src="<?php echo get_template_directory_uri();?>/images/logo-btn.png" alt="Logo" class="logo-header" draggable="false"></a>
                <?php
                if (!is_user_logged_in()) {
                    echo '<a href="javascript:showMessageBox()" class="link-header">Login</a>
';              }
                else {
                    echo '<div style="align-self: center;"><a href="javascript:window.location=\'' . esc_url(site_url('/wp-admin/index.php')) . '\'" class="link-header">Dashboard</a><br><a href="' . wp_logout_url(esc_url(site_url('/'))) . '" class="link-header">Log out</a></div>
';              }?>
            </div>
        </header>
        <?php
        if (!is_user_logged_in()) {
            echo '      <div id="blacker" class="blacker">
            <div id="messageBox" class="messageBox">
                <a href="javascript:hideMessageBox()" class="messageCross"><img src="' . get_template_directory_uri() . '/static/svg/cross/black.svg" alt="Cross"></a>
                <div class="messageBoxContent">
                    <form action="' . esc_url(site_url('wp-login.php', 'login_post')) . '" method="post">
                        <table>
                            <tbody>
                                <tr>
                                    <td><label for="log">Username: </label></td>
                                    <td><input name="log" required=""></td>
                                </tr>
                                <tr>
                                    <td><label for="pwd">Password: </label></td>
                                    <td><input name="pwd" type="password" required=""></td>
                                </tr>
                                <tr>
                                    <td><label for="rememberme">Remember me</label></td>
                                    <td><input name="rememberme" type="checkbox" value="forever"></td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>';
        }
        ?>
