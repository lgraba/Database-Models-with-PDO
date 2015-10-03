<?php
// info.php
// Simple script-a-roo for making sure I got those environmental variables set up correctly with Apache
?>

<h1>Hello!</h1>

<p>Got it working by simply changing the DocumentRoot in /etc/Apache2/sites-enabled/000-default.conf.</p>

<p>In the future it would probably be a good idea to create separate virtual hosts, but only for larger projects.</p>

<p><i>These are just tutorials I'm running through from codecourse.com!</i></p>

<p> I then added an environmental variable by creating an .htaccess file in the root directory, adding a "SetEnv ENVIRONMENT_VARIABLE variable_value" line to it, and then making sure that AllowOverride All was under the default site root directory in the apache2.conf file.</p>

<?php
phpinfo();