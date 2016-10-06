<?php
    
    function isValidEmail($email)
    {
       if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9_]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $email)) {
            return false;
        }
        return true;
    }
