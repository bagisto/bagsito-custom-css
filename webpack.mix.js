const { mix } = require("laravel-mix");
require("laravel-mix-merge-manifest");

if (mix.inProduction()) {
    var publicPath = 'publishable/assets';
} else {
    var publicPath = "../../../public/themes/default/assets";
}

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix.sass(__dirname + "/src/Resources/assets/sass/shop.scss", "css/shop.css");

if (mix.inProduction()) {
    mix.version();
}