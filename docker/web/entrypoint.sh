#!/usr/bin/env bash

chgrp -R www-data /var/lib/php/sessions
chown -R www-data:www-data /var/www/symfony/var
chown -R www-data:www-data /var/www/symfony/public/images
chown -R www-data:www-data /var/www/symfony/public/imagine

/var/www/symfony/bin/console app:data:index
chown -R www-data:www-data /var/www/symfony/var

exec "$@"
