<?php
/*
Template Name: Custom Login
*/

defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<style>
    body {
        background-color: #F8F8F8;
    }
</style>

<div class="login-container">
    <h3 class="login-title">
        Login bij Social Brothers
    </h3>

    <p class="mb-5 login-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br />
        eiusmod tempor incidunt ut labore et dolore magna aliqua. Magnis <br />
        dis parturient montes nascetur ridiculus mus mauris vitae ultricies.
    </p>

    <form action="<?php echo wp_login_url(); ?>" method="post">
        <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/')); ?>">
        <div class="mb-4 login-input-border">
            <input type="text" id="username" name="log" class="login-input" placeholder="Gebruikersnaam">
        </div>
        <div class="mb-4 login-input-border">
            <input type="password" id="password" name="pwd" class="login-input" placeholder="Wachtwoord">
        </div>
        <div class="mb-4 login-button-border">
            <button type="submit" class="login-button">Login</button>
        </div>
    </form>
</div>

<?php

get_footer();
