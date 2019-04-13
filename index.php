<!-- PHP SECURITY -->

# SQL Injection
- write ( 1' OR '1'='1' ) in form input for get table row
- avoid sql injection with (real_escape_string) in input text
- more code for sql injection can check on w3shools

# Password User
- encrypt password with md5 -> md5($password)
- encrypt password with md5 -> hash('md5',$password)
- encrypt password with sha256 -> hash('sha256',$password)
- decrypt password in crackstation.net
- best enscrypt is password_hash -> password_hash($password) -> php 5.5 or higer
- decrypt password_hash -> password_verify($password, $hash) -> return true/false

#user access permission
- add field role for create different access

#Format file
- save in format .php for hide text

#.htaccess
- hide file directory with add file .htaccess -> (Options -Indexes)

# Error Reporting
- turn on error reporting on LIVE.
- for turn off error report in php -> error_reporting(0)
- turn off also can do in file php.ini -> display_errors = off

# XSS (Cross-site Scripting)
- input javascript code in form input text


5. CSRF

<!-- END PHP SECURITY -->
