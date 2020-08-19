# hjl_wkhtml


If you have specific PHP versions running:

git clone https://github.com/jbboehr/php-handlebars.git

cd php-handlebars

/usr/local/bin/phpize

./configure --with-php-config=/usr/local/bin/php-config

make

make test

sudo make install

Add the extension to your php.ini:
echo extension=handlebars.so | tee -a /path/to/your/php.ini
Finally, restart the web server.

Usage
$vm = new Handlebars\VM();
echo $vm->render('{{foo}}', array('foo' => 'bar'));
echo $vm->renderFile('/path/to/foo.hbs', array('foo' => 'bar'));
