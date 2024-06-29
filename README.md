# 🚀 Projeto PHP com Keycloak

Este projeto é uma aplicação PHP simples integrada com Keycloak para autenticação e autorização de usuários.

## 📋 Pré-requisitos

- Docker e Docker Compose instalados
- Acesso ao Keycloak

## 🛠️ Configuração

### Configure o Keycloak

1. Acesse o painel de administração do Keycloak: [http://localhost:8081](http://localhost:8081)
2. Crie um Realm e um Cliente conforme as instruções abaixo:
   - **Client ID:** `seu-cliente`
   - **Client Secret:** `seu-segredo`
   - **Redirect URI:** `http://localhost:8080/callback`

### Configurar o projeto

No arquivo `config/keycloak.php`, substitua os valores:

```php
return [
    'client_id' => 'seu-cliente',
    'client_secret' => 'seu-segredo',
    'redirect_uri' => 'http://localhost:8080/callback',
    'auth_server_url' => 'http://keycloak:8080/realms/seu-realm',
];

## ▶️ Executar o Projeto

### Subir os serviços:

```bash
docker-compose up -d

### Acessar a aplicação:

- Abra seu navegador e acesse [http://localhost:8080](http://localhost:8080)
- Você será redirecionado para o Keycloak para autenticação.

## 🔄 Fluxo de Autenticação

1. O usuário acessa a aplicação.
2. É redirecionado para o Keycloak para autenticação.
3. Após login, é redirecionado de volta para a aplicação com as informações do usuário.

## 📝 Estrutura do Projeto

```plaintext
├── config/
│   └── keycloak.php         # Configurações do Keycloak
├── docker-compose.yml       # Configuração do Docker
├── Dockerfile               # Configuração do ambiente PHP
├── src/
│   ├── index.php            # Ponto de entrada da aplicação
│   └── callback.php         # Callback do Keycloak
└── README.md                # Documentação do projeto

## 🤝 Contribuindo

1. Faça um fork do projeto.
2. Crie uma nova branch: `git checkout -b minha-nova-funcionalidade`
3. Faça suas alterações e commit: `git commit -m 'feat: Minha nova funcionalidade'`
4. Envie para o repositório remoto: `git push origin minha-nova-funcionalidade`
5. Abra um Pull Request.

---

Feito com ❤️ por [José Márcio Barthem](https://github.com/marciodeveloper)
