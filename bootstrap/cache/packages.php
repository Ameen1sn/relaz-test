<?php return array (
  'akaunting/laravel-money' => 
  array (
    'providers' => 
    array (
      0 => 'Akaunting\\Money\\Provider',
    ),
  ),
  'akcybex/laravel-jazzcash' => 
  array (
    'providers' => 
    array (
      0 => 'AKCybex\\JazzCash\\AKJazzCashServiceProvider',
    ),
    'aliases' => 
    array (
      'JazzCash' => 'AKCybex\\JazzCash\\Facades\\JazzCash',
    ),
  ),
  'artesaos/seotools' => 
  array (
    'aliases' => 
    array (
      'SEO' => 'Artesaos\\SEOTools\\Facades\\SEOTools',
      'JsonLd' => 'Artesaos\\SEOTools\\Facades\\JsonLd',
      'SEOMeta' => 'Artesaos\\SEOTools\\Facades\\SEOMeta',
      'Twitter' => 'Artesaos\\SEOTools\\Facades\\TwitterCard',
      'OpenGraph' => 'Artesaos\\SEOTools\\Facades\\OpenGraph',
    ),
    'providers' => 
    array (
      0 => 'Artesaos\\SEOTools\\Providers\\SEOToolsServiceProvider',
    ),
  ),
  'barryvdh/laravel-debugbar' => 
  array (
    'aliases' => 
    array (
      'Debugbar' => 'Barryvdh\\Debugbar\\Facades\\Debugbar',
    ),
    'providers' => 
    array (
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
  ),
  'blade-ui-kit/blade-icons' => 
  array (
    'providers' => 
    array (
      0 => 'BladeUI\\Icons\\BladeIconsServiceProvider',
    ),
  ),
  'cartalyst/stripe-laravel' => 
  array (
    'providers' => 
    array (
      0 => 'Cartalyst\\Stripe\\Laravel\\StripeServiceProvider',
    ),
    'aliases' => 
    array (
      'Stripe' => 'Cartalyst\\Stripe\\Laravel\\Facades\\Stripe',
    ),
  ),
  'cloudinary-labs/cloudinary-laravel' => 
  array (
    'aliases' => 
    array (
      'Cloudinary' => 'CloudinaryLabs\\CloudinaryLaravel\\Facades\\Cloudinary',
    ),
    'providers' => 
    array (
      0 => 'CloudinaryLabs\\CloudinaryLaravel\\CloudinaryServiceProvider',
    ),
  ),
  'daftspunk/laravel-config-writer' => 
  array (
    'providers' => 
    array (
      0 => 'October\\Rain\\Config\\ServiceProvider',
    ),
  ),
  'htmlmin/htmlmin' => 
  array (
    'providers' => 
    array (
      0 => 'HTMLMin\\HTMLMin\\HTMLMinServiceProvider',
    ),
    'aliases' => 
    array (
      'HTMLMin' => 'HTMLMin\\HTMLMin\\Facades\\HTMLMin',
    ),
  ),
  'intervention/httpauth' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\HttpAuth\\Laravel\\HttpAuthServiceProvider',
    ),
    'aliases' => 
    array (
      'HttpAuth' => 'Intervention\\HttpAuth\\Laravel\\Facades\\HttpAuth',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'laravel/sail' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sail\\SailServiceProvider',
    ),
  ),
  'laravel/sanctum' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'livewire/livewire' => 
  array (
    'aliases' => 
    array (
      'Livewire' => 'Livewire\\Livewire',
    ),
    'providers' => 
    array (
      0 => 'Livewire\\LivewireServiceProvider',
    ),
  ),
  'loveycom/cashfree' => 
  array (
    'providers' => 
    array (
      0 => 'LoveyCom\\CashFree\\CashFreeServiceProvider',
    ),
  ),
  'lukeraymonddowning/honey' => 
  array (
    'providers' => 
    array (
      0 => 'Lukeraymonddowning\\Honey\\Providers\\HoneyServiceProvider',
    ),
    'aliases' => 
    array (
      'Honey' => 'Lukeraymonddowning\\Honey\\Facades\\Honey',
    ),
  ),
  'maatwebsite/excel' => 
  array (
    'aliases' => 
    array (
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
    ),
    'providers' => 
    array (
      0 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    ),
  ),
  'mailjet/laravel-mailjet' => 
  array (
    'aliases' => 
    array (
      'Mailjet' => 'Mailjet\\LaravelMailjet\\Facades\\Mailjet',
    ),
    'providers' => 
    array (
      0 => 'Mailjet\\LaravelMailjet\\MailjetServiceProvider',
    ),
  ),
  'mollie/laravel-mollie' => 
  array (
    'aliases' => 
    array (
      'Mollie' => 'Mollie\\Laravel\\Facades\\Mollie',
    ),
    'providers' => 
    array (
      0 => 'Mollie\\Laravel\\MollieServiceProvider',
    ),
  ),
  'munafio/chatify' => 
  array (
    'aliases' => 
    array (
      'Chatify' => 'Chatify\\Facades\\ChatifyMessenger',
    ),
    'providers' => 
    array (
      0 => 'Chatify\\ChatifyServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'nunomaduro/termwind' => 
  array (
    'providers' => 
    array (
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
  'opcodesio/log-viewer' => 
  array (
    'aliases' => 
    array (
      'LogViewer' => 'Opcodes\\LogViewer\\Facades\\LogViewer',
    ),
    'providers' => 
    array (
      0 => 'Opcodes\\LogViewer\\LogViewerServiceProvider',
    ),
  ),
  'orangehill/iseed' => 
  array (
    'providers' => 
    array (
      0 => 'Orangehill\\Iseed\\IseedServiceProvider',
    ),
  ),
  'outhebox/blade-flags' => 
  array (
    'providers' => 
    array (
      0 => 'OutheBox\\BladeFlags\\BladeFlagsServiceProvider',
    ),
  ),
  'pharaonic/livewire-select2' => 
  array (
    'providers' => 
    array (
      0 => 'Pharaonic\\Livewire\\Select2\\Select2ServiceProvider',
    ),
  ),
  'ralphjsmit/livewire-urls' => 
  array (
    'aliases' => 
    array (
      'LivewireUrls' => 'RalphJSmit\\Livewire\\Urls\\Facades\\Url',
    ),
    'providers' => 
    array (
      0 => 'RalphJSmit\\Livewire\\Urls\\LivewireUrlsServiceProvider',
    ),
  ),
  'rtconner/laravel-tagging' => 
  array (
    'providers' => 
    array (
      0 => 'Conner\\Tagging\\Providers\\TaggingServiceProvider',
    ),
  ),
  'socialiteproviders/manager' => 
  array (
    'providers' => 
    array (
      0 => 'SocialiteProviders\\Manager\\ServiceProvider',
    ),
  ),
  'spatie/laravel-ignition' => 
  array (
    'aliases' => 
    array (
      'Flare' => 'Spatie\\LaravelIgnition\\Facades\\Flare',
    ),
    'providers' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\IgnitionServiceProvider',
    ),
  ),
  'spatie/laravel-sitemap' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\Sitemap\\SitemapServiceProvider',
    ),
  ),
  'srmklive/paypal' => 
  array (
    'aliases' => 
    array (
      'PayPal' => 'Srmklive\\PayPal\\Facades\\PayPal',
    ),
    'providers' => 
    array (
      0 => 'Srmklive\\PayPal\\Providers\\PayPalServiceProvider',
    ),
  ),
  'stevebauman/purify' => 
  array (
    'providers' => 
    array (
      0 => 'Stevebauman\\Purify\\PurifyServiceProvider',
    ),
    'aliases' => 
    array (
      'Purify' => 'Stevebauman\\Purify\\Facades\\Purify',
    ),
  ),
  'unicodeveloper/laravel-paystack' => 
  array (
    'aliases' => 
    array (
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
    ),
    'providers' => 
    array (
      0 => 'Unicodeveloper\\Paystack\\PaystackServiceProvider',
    ),
  ),
  'wireui/wireui' => 
  array (
    'aliases' => 
    array (
    ),
    'providers' => 
    array (
      0 => 'WireUi\\Providers\\WireUiServiceProvider',
    ),
  ),
);