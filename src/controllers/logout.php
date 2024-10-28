<?php

    session_destroy();
    unset($_SESSION['user']);
    http_redirect("home",302);