<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'disks' => [

        // Ruta donde se almacenan los archivos de excel
        'local' => [
            'driver' => 'local',
            // 'root'   => storage_path('app'),
            'root'   => public_path('documents'),
        ],

        // Ruta donde se almacenan las fotos de perfil de un usuario
        'photo' => [
            'driver' => 'local',
            'root'   => public_path('media/photo-perfil'),
        ],

        // Ruta donde se almacenan las fotos cover de un perfil
        'cover' => [
            'driver' => 'local',
            'root'   => public_path('media/photo-perfil-perfil'),
        ],

        // Ruta donde se almacenan las fotos de una empresa
        'photo_company' => [
            'driver' => 'local',
            'root'   => public_path('media/photo-company'),
        ],

        // Ruta donde se almacenan las fotos de una tienda
        'photo_store' => [
            'driver' => 'local',
            'root'   => public_path('media/photo-store'),
        ],

        'photo_product' => [
            'driver' => 'local',
            'root'   => public_path('media/photo-product'),
        ],




        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'ftp.example.com',
            'username' => 'your-username',
            'password' => 'your-password',

            // Optional FTP Settings...
            // 'port'     => 21,
            // 'root'     => '',
            // 'passive'  => true,
            // 'ssl'      => true,
            // 'timeout'  => 30,
        ],

        's3' => [
            'driver' => 's3',
            'key'    => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

        'rackspace' => [
            'driver'    => 'rackspace',
            'username'  => 'your-username',
            'key'       => 'your-key',
            'container' => 'your-container',
            'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
            'region'    => 'IAD',
            'url_type'  => 'publicURL',
        ],

    ],

];
