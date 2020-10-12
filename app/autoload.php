<?php

// Include Config
require('app/config.php');

// Classes folder
require('app/classes/Bootstrap.php');
require('app/classes/Controller.php');
require('app/classes/Model.php');
require('app/classes/Message.php');

// Controller folder
require('app/controllers/home.php');
require('app/controllers/posts.php');
require('app/controllers/users.php');
require('app/controllers/pagenotfound.php');


// Models folder
require('app/models/post.php');
require('app/models/user.php');