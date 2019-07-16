1. Add this package in Laravel's provider registry by adding this line below in config/app.php file:
"Webkul\CustomCSS\Providers\CustomCSSServiceProvider::class,"

2. Add this package to autoloading by adding this line below composer.json file's psr-4 object:
"Webkul\\CustomCSS\\": "packages/Webkul/CustomCSS"

3. Additionally you should also install npm using the command below, if you need to write syntax other than CSS:

~~~
npm install
~~~

for development do:

~~~
npm run dev
~~~

for production do:

~~~
npm run prod
~~~