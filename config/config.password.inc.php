<?php

$config['password_driver'] = getenv('PASSWORD_DRIVER') ?: 'ldap_simple';
$config['password_confirm_current'] = getenv('PASSWORD_CONFIRM_CURRENT') === 'true';

# LDAP driver
$config['password_ldap_host'] = getenv('PASSWORD_LDAP_HOST') ?: 'localhost';
$config['password_ldap_port'] = getenv('PASSWORD_LDAP_PORT') ?: '389';
$config['password_ldap_starttls'] = getenv('PASSWORD_LDAP_STARTTLS') === 'true';
$config['password_ldap_version'] = getenv('PASSWORD_LDAP_VERSION') ?: '3';
$config['password_ldap_basedn'] = getenv('PASSWORD_LDAP_BASEDN') ?: null;
$config['password_ldap_method'] = getenv('PASSWORD_LDAP_METHOD') ?: 'user';
$config['password_ldap_userDN_mask'] = getenv('PASSWORD_LDAP_USERDN_MASK') ?: null;
$config['password_ldap_adminDN'] = getenv('PASSWORD_LDAP_ADMINDN') ?: null;
$config['password_ldap_adminPW'] = getenv('PASSWORD_LDAP_ADMINPW') ?: null;
$config['password_ldap_encodage'] = getenv('PASSWORD_LDAP_ENCODAGE') ?: 'crypt';
$config['password_ldap_pwattr'] = getenv('PASSWORD_LDAP_PWATTR') ?: 'userPassword';
$config['password_ldap_lchattr'] = getenv('PASSWORD_LDAP_LCHATTR') ?: null;
$config['password_ldap_force_replace'] = getenv('PASSWORD_LDAP_FORCE_REPLACE') ? getenv('PASSWORD_LDAP_FORCE_REPLACE') === 'true' : true;

