RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?wortit.net [NC]
#RewriteCond %{HTTP_REFERER} !^http(s)?://(www\.)?witclo.net [NC]
#RewriteCond %{HTTP_REFERER} !^http(s)?://localhost/w/ [NC]
RewriteRule \.(jpg|jpeg|png|gif)$ http://www.wortit.net/images/avatar/group.png [NC,R,L]