<?php
require 'vendor/autoload.php';

use Jumbojett\OpenIDConnectClient;

// Carregar configuração
$config = include 'config/keycloak.php';

$oidc = new OpenIDConnectClient(
    $config['auth_server_url'],
    $config['client_id'],
    $config['client_secret']
);

$oidc->setRedirectURL($config['redirect_uri']);

// Processar o callback
$oidc->authenticate();

// Obter informações do usuário
$userInfo = $oidc->requestUserInfo();

echo 'Bem-vindo, ' . htmlspecialchars($userInfo->name);
