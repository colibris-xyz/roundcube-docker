<?php

// ----------------------------------
// SYSTEM
// ----------------------------------

$config['cipher_method'] = getenv('CIPHER_METHOD') ?: 'DES-EDE3-CBC';
$config['login_autocomplete'] = (int) getenv('LOGIN_AUTOCOMPLETE') ?: 0;
$config['max_message_size'] = getenv('MAX_MESSAGE_SIZE') ?: '100M';

// ----------------------------------
// USER INTERFACE
// ----------------------------------

$config['quota_zero_as_unlimited'] = getenv('QUOTA_ZERO_AS_UNLIMITED') ? getenv('QUOTA_ZERO_AS_UNLIMITED') === 'true' : false;

// ----------------------------------
// USER PREFERENCES
// ----------------------------------

$config['draft_autosave'] = (int) getenv('DRAFT_AUTOSAVE') ?: 300;
$config['default_list_mode'] = getenv('DEFAULT_LIST_MODE') ?: 'list';
$config['autoexpand_threads'] = (int) getenv('AUTOEXPAND_THREADS') ?: 0;
$config['check_all_folders'] = getenv('CHECK_ALL_FOLDERS') ? getenv('CHECK_ALL_FOLDERS') === 'true' : false;
$config['htmleditor'] = (int) getenv('HTMLEDITOR') ?: 0;

// ----------------------------------
// ADDRESSBOOK SETTINGS
// ----------------------------------

$config['address_book_type'] = getenv('ADDRESS_BOOK_TYPE') ?: 'sql';
$config['autocomplete_addressbooks'] = getenv('AUTOCOMPLETE_ADDRESSBOOKS') ? explode(',', getenv('AUTOCOMPLETE_ADDRESSBOOKS')) : ['sql'];
