<?php
    session_start();
    session_destroy();
    header('location:auth-sign-up.php');
   