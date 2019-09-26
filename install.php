<?php 

// --------------------------------------------------------------------- //
//
//      Insurrance Architect installer
//
//      Author : nicolas.delcastillo@syntesy.io
//
// --------------------------------------------------------------------- //
$vendors = [
    [
        "package" => "barryvdh/laravel-cors",
        "version" => "^0.11.3"
    ],

    [
        "package" => "doctrine/dbal",
        "version" => "^2.9"
    ],

    [
        "package" => "intervention/image",
        "version" => "^2.4"
    ],

    [
        "package" => "jenssegers/date",
        "version" => "^3.5"
    ],

    [
        "package" => "kalnoy/nestedset",
        "version" => "^4.3"
    ],

    [
        "package" => "laravelcollective/html",
        "version" => "^5.4.0"
    ],

    [
        "package" => "prettus/l5-repository",
        "version" => "^2.6"
    ],

    [
        "package" => "yajra/laravel-datatables-oracle",
        "version" => "~8.0"
    ],

    [
        "package" => "mariuzzo/laravel-js-localization",
        "version" => "^1.4"
    ],

    [
        "package" => "mcamara/laravel-localization",
        "version" => "^1.3"
    ],

    [
        "package" => "elasticsearch/elasticsearch",
        "version" => "^6.0"
    ],

    [
        "package" => "kevindierkx/laravel-domain-localization",
        "version" => "^2.0"
    ]
    ];


function updateEnv($key,$value)
{
    $path = __DIR__ . '/../../.env';

    //Try to read the current content of .env
    $current = file_get_contents($path);   

    //Store the key
    $original = [];
    if (preg_match('/^'.$key.'=(.+)$/m', $current, $original)) { 
        $current = preg_replace('/^'.$key.'=.+$/m', "$key=$value", $current);
    } else {
        $current .= PHP_EOL."$key=$value";
    }

    return file_put_contents($path, $current);
}


// --------------------------------------------------------------------- //
//      DB MIGRATION
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "-> Migrate DB for module " . basename(__DIR__) . PHP_EOL;
exec('php artisan module:migrate ' . basename(__DIR__));
echo "-> OK " . PHP_EOL;
// --------------------------------------------------------------------- //


// --------------------------------------------------------------------- //
//      INSTALL NODE MODULES
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "-> Installing NPM packages for " . basename(__DIR__) . PHP_EOL;
exec("npm install");
echo "-> OK " . PHP_EOL;
// --------------------------------------------------------------------- //


// --------------------------------------------------------------------- //
//      ASSETS BUILDING
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "Would you want to build assets for production (prod) or development (dev) ? ";
$handle = fopen ("php://stdin","r");
$env = trim(fgets($handle)) == 'prod' ? 'prod' : 'dev';
echo "-> Buidling $env assets for module " . basename(__DIR__) . PHP_EOL;
exec("npm run $env");
// --------------------------------------------------------------------- //


// --------------------------------------------------------------------- //
//      INSTALL VENDORS
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "-> Installing vendors (composer) " . basename(__DIR__) . PHP_EOL;

if(!empty($vendors)) {
    foreach($vendors as $vendor) {
        exec("../composer require " . $vendor["package"] . " " . $vendor["version"]);
    }
} else {
    echo " Nothing to install " . PHP_EOL;
}
// --------------------------------------------------------------------- //


// --------------------------------------------------------------------- //
//      CONFIGURE PROD WS
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "Enter the webservice URL for production ? ";
$handle = fopen ("php://stdin","r");
$url = trim(fgets($handle));
if(updateEnv('WS_URL', $url) !== false) {
    echo "-> OK";
}
// --------------------------------------------------------------------- //


// --------------------------------------------------------------------- //
//      CONFIGURE TEST WS
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "Enter the webservice URL for test ? ";
$handle = fopen ("php://stdin","r");
$url = trim(fgets($handle));
if(updateEnv('WS_URL_TEST', $url) !== false) {
    echo "-> OK";
}
// --------------------------------------------------------------------- //


// --------------------------------------------------------------------- //
//      CONFIGURE TEST WS
// --------------------------------------------------------------------- //
echo PHP_EOL;
echo "Enter the webservice URL for recette ? ";
$handle = fopen ("php://stdin","r");
$url = trim(fgets($handle));
if(updateEnv('WS_URL_REC', $url) !== false) {
    echo " -> OK";
}
echo PHP_EOL;
// --------------------------------------------------------------------- //