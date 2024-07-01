# atividade_WEB

# Sistema de Gestão de Eventos

Este é um sistema desenvolvido em PHP para gerenciar eventos. Ele utiliza um banco de dados MySQL para armazenar informações sobre os eventos, permitindo operações básicas de CRUD (Create, Read, Update, Delete).

## Funcionalidades Implementadas

- **Cadastro de Eventos:** Permite adicionar novos eventos ao sistema.
- **Visualização de Eventos:** Lista todos os eventos cadastrados.
- **Edição de Eventos:** Permite modificar os detalhes de um evento existente.
- **Exclusão de Eventos:** Remove um evento do sistema.

## Requisitos

Para executar o projeto localmente, você precisará ter instalado:

- Servidor web (por exemplo, Apache)
- PHP 7.0 ou superior
- MySQL

## Configuração do Banco de Dados

1. **Criar o Banco de Dados:**
   - Crie um banco de dados MySQL chamado `eventos`.

2. **Importar a Estrutura do Banco de Dados:**
   - Importe o arquivo `db/eventos.sql` para o banco de dados `eventos`.

   ```bash
   mysql -u seu_usuario -p eventos < db/eventos.sql
