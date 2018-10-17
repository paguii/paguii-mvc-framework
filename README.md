# Welcome to MVC Framework - PaGuii

This is a very simple MVC Framework that is easy to understand and to modify. This is a very starting version if you have anything to say please contribute, dont be affraid.

Better with PHP 7+

# Virtual Host
If you need to configure a virtual host in your apache2.4 you can use this model.

	<VirtualHost *:80>
	    DocumentRoot "/Users/MyUser/Documents/MyWebSite/"
	    ServerName MyWebsite.localhost
	    ServerAlias MyWebsite.localhost

	    <Directory /Users/MyUser/Documents/MyWebSite/>
	        RewriteEngine On
	        RewriteCond %{REQUEST_FILENAME} !-d
	        RewriteCond %{REQUEST_FILENAME} !-f
	        RewriteCond %{REQUEST_FILENAME} !-l
	        RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
	    </Directory>
	</VirtualHost>




## Using MVC Framework PaGuii

You can note that there is a folder called MVC. Inside you can see the three layers, Model, View, Controller. For each one there is an example so you can locate yourself. If you have any problems or if you want to suggest an improvement feel free. =)

