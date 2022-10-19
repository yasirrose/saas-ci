<?php return array (
  'auth0/login' => 
  array (
    'aliases' => 
    array (
      'Auth0' => 'Auth0\\Laravel\\Facade\\Auth0',
    ),
    'providers' => 
    array (
      0 => 'Auth0\\Laravel\\ServiceProvider',
    ),
  ),
  'facade/ignition' => 
  array (
    'providers' => 
    array (
      0 => 'Facade\\Ignition\\IgnitionServiceProvider',
    ),
    'aliases' => 
    array (
      'Flare' => 'Facade\\Ignition\\Facades\\Flare',
    ),
  ),
  'fruitcake/laravel-cors' => 
  array (
    'providers' => 
    array (
      0 => 'Fruitcake\\Cors\\CorsServiceProvider',
    ),
  ),
  'joedixon/laravel-translation' => 
  array (
    'providers' => 
    array (
      0 => 'JoeDixon\\Translation\\TranslationServiceProvider',
      1 => 'JoeDixon\\Translation\\TranslationBindingsServiceProvider',
    ),
  ),
  'laravel/legacy-factories' => 
  array (
    'providers' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\LegacyFactoryServiceProvider',
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
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'livewire/livewire' => 
  array (
    'providers' => 
    array (
      0 => 'Livewire\\LivewireServiceProvider',
    ),
    'aliases' => 
    array (
      'Livewire' => 'Livewire\\Livewire',
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
  'stancl/tenancy' => 
  array (
    'providers' => 
    array (
      0 => 'Stancl\\Tenancy\\TenancyServiceProvider',
    ),
    'aliases' => 
    array (
      'Tenancy' => 'Stancl\\Tenancy\\Facades\\Tenancy',
      'GlobalCache' => 'Stancl\\Tenancy\\Facades\\GlobalCache',
    ),
  ),
  'ylsideas/feature-flags' => 
  array (
    'providers' => 
    array (
      0 => 'YlsIdeas\\FeatureFlags\\FeatureFlagsServiceProvider',
    ),
    'aliases' => 
    array (
      'FeatureFlags' => 'YlsIdeas\\FeatureFlags\\Facades\\Features',
    ),
  ),
);