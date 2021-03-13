<?php

$prefs['_GLOBAL']['fixed'] = getenv('CARDDAV_FIXED') === 'true';
$prefs['_GLOBAL']['hide_preferences'] = getenv('CARDDAV_HIDE_PREFERENCES') === 'true';

if (getenv('CARDDAV_PRESET_ID')) {
  $prefs[getenv('CARDDAV_PRESET_ID')] = array(
          // required attributes
          'name'         =>  getenv('CARDDAV_PRESET_ID'),
          'username'     =>  getenv('CARDDAV_PRESET_USERNAME') ?: null,
          'password'     =>  getenv('CARDDAV_PRESET_PASSWORD') ?: null,
          'url'          =>  getenv('CARDDAV_PRESET_URL') ?: null,

          // optional attributes
          'active'       =>  getenv('CARDDAV_PRESET_ACTIVE') === 'true',
          'readonly'     =>  getenv('CARDDAV_PRESET_READONLY') === 'true',
          'refresh_time' =>  getenv('CARDDAV_PRESET_REFRESH_TIME') ?: '00:05:00',

          'fixed'        =>  getenv('CARDDAV_PRESET_FIXED') ? explode(',', getenv('CARDDAV_PRESET_FIXED')) : array(),
          'hide'         =>  getenv('CARDDAV_PRESET_HIDE') === 'true'
  );
}
