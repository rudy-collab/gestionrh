<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],  // Méthodes HTTP autorisées (GET, POST, PUT, etc.)

    'allowed_origins' => ['http://localhost:3000', 'http://10.0.2.2:3000'],  // Origines autorisées (vous pouvez spécifier des domaines spécifiques)

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],  // En-têtes autorisés

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,  // Permettre l'utilisation des cookies
];
