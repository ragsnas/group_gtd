<?php

/**
 * File to call public in browser and therefore to handle all requests
 */
 
include_once '../application/bootstrap.php';

Bootstrap::init();

die ('Testing online editing and synching with local copy. Environment is "'.APPLICATION_ENV.'" now.');