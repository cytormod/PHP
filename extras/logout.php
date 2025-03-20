<?php
session_start();

session_destroy();
header('Location: /PHP_TravisMedia/05_sessions.php');