<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-24 13:00:12 +01:00 --- error: File not found: login
2013-03-24 14:03:02 +01:00 --- error: File not found: login
2013-03-24 14:06:02 +01:00 --- error: File not found: login
2013-03-24 14:07:02 +01:00 --- error: File not found: login
2013-03-24 14:08:02 +01:00 --- error: File not found: login
2013-03-24 14:09:02 +01:00 --- error: File not found: login
2013-03-24 14:10:02 +01:00 --- error: File not found: login
2013-03-24 14:11:02 +01:00 --- error: File not found: login
2013-03-24 14:12:02 +01:00 --- error: File not found: login
2013-03-24 14:13:02 +01:00 --- error: File not found: login
2013-03-24 14:13:26 +01:00 --- error: Kohana_Exception [ 403 ]: @todo FORBIDDEN
/opt/lampp/htdocs/gallery3/modules/gallery/helpers/access.php [ 202 ]
#0 /opt/lampp/htdocs/gallery3/modules/gallery/helpers/access.php(425): access_Core::forbidden()
#1 /opt/lampp/htdocs/gallery3/modules/gallery/controllers/logout.php(22): access_Core::verify_csrf()
#2 [internal function]: Logout_Controller->index()
#3 /opt/lampp/htdocs/gallery3/system/core/Kohana.php(331): ReflectionMethod->invokeArgs(Object(Logout_Controller), Array)
#4 [internal function]: Kohana_Core::instance(NULL)
#5 /opt/lampp/htdocs/gallery3/system/core/Event.php(208): call_user_func_array(Array, Array)
#6 /opt/lampp/htdocs/gallery3/application/Bootstrap.php(67): Event_Core::run('system.execute')
#7 /opt/lampp/htdocs/gallery3/index.php(116): require('/opt/lampp/htdo...')
#8 {main}
2013-03-24 14:13:26 +01:00 --- error: Missing messages entry kohana/core.errors.403 for message kohana/core
