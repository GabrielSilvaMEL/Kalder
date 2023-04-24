# Kalder Blog
> Projeto de desenvolvimento de aplicação web em Laravel.

### O Projeto
Desenvolvimento em Laravel de um blog robusto com recursos como gerenciamento de postagens, comentários, e uma página de autor. 
Adicionar recursos de segurança, como autenticação e autorização, para gerenciamento de usuários.

### Regras de Negócio
- **Gerenciamento de postagens:** o blog deve permitir que os usuários possam criar, editar, excluir e visualizar suas postagens. 
As postagens devem ter um título, conteúdo, tags e categoria.
- **Gerenciamento de comentários:** os usuários devem poder deixar comentários nas postagens. Os comentários podem ser moderados pelos administradores do blog.
- **Página de autor:** cada autor deve ter sua própria página com informações de perfil, como nome, biografia e foto.
- **Autenticação e autorização:** apenas usuários autenticados podem criar postagens e comentários. Além disso, deve haver diferentes níveis de permissão para os usuários, como administrador, editor e autor.
- **Experiência do usuário:** o aplicativo deve ser projetado para fornecer uma experiência de usuário rápida e eficiente.
- **Monitoramento de desempenho:** o DevOps Azure deve ser configurado para monitorar o desempenho do aplicativo e identificar problemas de desempenho.

### Arquitetura de Desenvolvimento
Será utilizada a arquitetura de desenvolvimento MVC (Model-View-Controller), se tratando de um padrão de arquitetura de software 
que divide a aplicação em três componentes principais:
1. **Model:** é responsável por lidar com a lógica de negócios e interações com o banco de dados.
2. **View:** é a camada responsável por apresentar os dados ao usuário em forma de interface gráfica.
3. **Controller:** é responsável por lidar com as requisições do usuário.

### Linguagens
Serão utilizadas as seguintes linguagens/mecanismos de desenvolvimento:
- HTML;
- CSS;
- PHP;
- Blade;
- SQL;

### Ferramentas de Desenvolvimento
Serão utilizadas as seguintes ferramentas:
- **Visual Studio Code** (editor de código);
  - **Laravel 7** (framework principal da aplicação);
    - **Composer** (gerenciar as dependências do Laravel);
    - **Node.js** (execução do código JavaScript no lado do servidor);
    - **Vite** (empacotador de módulos);
    - **Breeze** (pacote do Laravel para autenticação de usuários):
- **Figma** (design e prototipação da interface);
- **XAMP/WAMP** (execução da aplicação em um ambiente de servidor web local);
- **MySQL** (gerenciamento do banco de dados).

### Papel do Azure DevOps
Utilizar o DevOps Azure para monitorar o desempenho do aplicativo, 
garantindo que o blog seja escalável e que ofereça uma experiência de usuário eficiente.
