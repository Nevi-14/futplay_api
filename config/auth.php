<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'usuarios',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent usuarios provider.
    |
    | All authentication drivers have a usuarios provider. This defines how the
    | usuarios are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your usuarios's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'usuarios',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | usuarios Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a usuarios provider. This defines how the
    | usuarios are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your usuarios's data.
    |
    | If you have multiple usuarios tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'usuarios' => [
            'driver' => 'eloquent',
            'model' => App\Models\Usuario::class,
        ],

        // 'usuarios' => [
        //     'driver' => 'database',
        //     'table' => 'usuarios',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one usuarios table or model in the application and you want to have
    | separate password reset settings based on the specific usuarios types.
    |
    | The expire time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'usuarios' => [
            'provider' => 'usuarios',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the usuarios is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
