<p align="center">![][http://1.bp.blogspot.com/_YMjrin1Fa20/Szrj3PPI3nI/AAAAAAAAADY/fWuFnhJ1Jn0/s320/sicbras.jpg "SiCBRAS"]</p>

1. [Configurações do Projeto][#1-configuracoes-do-projeto]
2. [Organização do Projeto][#2-organizacao-do-projeto]
3. [Orientações sobre o Versionamento][#3-orientacoes-sobre-o-versionamento]

# 1. Configurações do Projeto
## Pré-Requisitos
- PHP $\geq$ 7.1.3
- Composer
- Git
- MySQL (Pode ser XAMPP, LAMP, etc)

## Baixando o projeto
1. Forke este repositório para a sua conta no GitHub;
2. Clone o repositório forkado para a sua máquina. Caso não saiba muito bem como usar o Git, [clique aqui](https://blog.dmatoso.com/usando-git-e-github-no-windows-a059c791c0af).

## Banco de Dados
1. Crie um banco de dados do tipo "utf8mb4_general_ci";
2. Vá na pasta do projeto e renomeie o arquivo ".env.example" para ".env";
3. Configure o arquivo ".env" com as suas configurações de banco de dados. A maioria provavelmente só vai precisar configurar o nome do banco, do usuário e a senha.

## Rodando o Projeto
1. No terminal do computador, vá até a pasta do projeto e execute `composer install`;
2. Ainda no terminal, execute o comando `php artisan migrate`;
3. Execute o comando `php artisan serve`. Esse último comando sempre precisará ser executado para abrir a conexão.
4. Estarte o banco de dados, caso não esteja. Se o banco de dados não estiver estartado, o acesso ao sistema interno não ocorrerá. 

# 2. Organização do Projeto
- Cada módulo tem uma pasta própria para as Views `( resources-> views )`. 
- Cada módulo tem uma pasta própria para os Controllers `( app-> Http-> Controllers )`.
- Cada módulo tem uma pasta própria para as Models `( app-> Models )`.
- Cada módulo tem uma parte própria pra colocar as rotas `( routes )` dentro de "web.php".
- A página do menu está em `config-> adminlte.php`. Cada equipe irá gerenciar os subitens do seu módulo.

# 3. Orientações sobre o Versionamento
- Sempre que fizer alguma alteração no projeto, você precisa commitar e enviar para o seu repositório local e depois enviar um Pull Request para esse repositório aqui, para que todos tenham um único repositório (esse aqui) com as atualizações mais recentes. Para saber como proceder, [clique aqui](https://blog.da2k.com.br/2015/02/04/git-e-github-do-clone-ao-pull-request/). Mas antes disso, você precisa atualizar seu repositório com as atualizações desse repositório aqui (caso hajam), pois se outra pessoa tiver editado o mesmo arquivo que você, o pull não poderá ser efetuado. Para saber como sempre deixar seu repositório com as atualizações desse aqui, [clique aqui](https://gist.github.com/rdeavila/9618969);
- Mantenha o projeto o mais organizado possível; 
- Sempre que for criar algum arquivo para seu módulo, organize-o dentro das próprias pastas de cada módulo. Caso não haja a pasta, crie uma;
- Havendo qualquer intenção de mudança estrutural no projeto de modo que possa impactar nos outros módulos, a solicitação deve ser conversada antes com a equipe de Integração ou bem justificada no Pull Request, de modo a ser repassada posteriormente para as outras equipes.