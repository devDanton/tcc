# SISTEMA WEB PARA O GERENCIAMENTO DE DOAÇÕES DE ROUPAS

Danton R. Abreu, Iverton Adão S. Santos
Tecnologia em Análise e Desenvolvimento de Sistemas - Instituto Federal Farroupilha - Campus Alegrete
danton.2019014677@aluno.iffar.edu.br, iverton.santos@iffarroupilha.edu.br

Resumo. Este trabalho de conclusão de curso tem como objetivo criar um sistema capaz de auxiliar no gerenciamento de doações de roupas e melhorar a seleção das pessoas que devem recebê-las. A partir de um sistema web, será possível gerenciar roupas recebidas, cadastrar pessoas carentes, cadastrar doadores interessados e criar campanhas com o intuito de obter cada vez mais roupas. Assim as ONGs terão um banco de dados com pessoas que necessitam de doações e uma maior quantidade de roupas para realizar doações.

## 1. Introdução.

É fato que a pobreza assola o mundo há diversas décadas. Tendo em vista que mal exista acessibilidade para pessoas em situação de carência, torna-se indubitável a existência de meios que facilitem o acesso do povo a meios beneficentes.
Segundo o Instituto Brasileiro de Geografia e Estatística (2019), o número de voluntários brasileiros em 2019 foi de 6,9 milhões de pessoas, 300 mil a menos do que no ano anterior. E tendo em vista as dificuldades impostas pelo isolamento social que a pandemia proporcionou, pode ter causado agravamento da crise em relação à sociedade que já se encontrava em drama - dados do Relatório do Desenvolvimento Humano 2019, publicado pelo Programa das Nações Unidas para o Desenvolvimento (PNUD), apontam o Brasil com a 8ª pior desigualdade de renda do mundo.
Visando resolver este impasse, surgem às ONGs (Organizações não Governamentais) que são entidades sem fins lucrativos cujo principal objetivo é desenvolver uma sociedade democrática e igualitária. Entretanto, nota-se a deficiência de uma organização ágil e efetiva quando se trata de armazenamento de dados, contato direto com indivíduos carentes e com pessoas interessadas em ajudar, entre outros problemas já notificados na gestão de ONGs.
Dessa forma, este estudo busca principalmente disponibilizar às ONGs uma ferramenta que facilite o seu gerenciamento cotidiano e que proporcione ajuda ao maior grupo de pessoas carentes possível.

### 1.1. Objetivo geral.

Desenvolver um sistema web que possibilite aumentar a quantidade de roupas recebidas, auxiliar no gerenciamento de doadores disponíveis, facilitar a classificação dos donatários carentes, ter um melhor controle das roupas em estoque e disponibilizar campanhas que atraiam uma maior visibilidade dentre a sociedade.

### 1.2. Objetivo específico.

Desenvolver um sistema de gerenciamento de doações, doadores e donatários para ONGs;
Desenvolver módulo que permita ao funcionário da ONG ter controle do estoque de roupas;
Desenvolver módulo que permita ao funcionário criar campanhas que disponibilize aos colaboradores um painel com os tipos e tamanhos de roupas mais solicitadas;
Disponibilizar para pessoas interessadas a se tornar doadores um formulário que possibilita deixar seus dados pessoais para contato e suas respectivas medidas de vestuário, para assim otimizar a busca de roupas de tamanho compatível com as donatário;
Disponibilizar para os colaboradores e funcionário da ONG um formulário que os possibilita disponibilizar os dados pessoais de pessoas carentes e sua respectivas medidas de vestuário, para assim otimizar a busca de roupas de tamanho compatível com a doador;

## 2. Trabalhos Relacionados.

A seguir serão listados alguns sistemas web usados como base para o desenvolvimento do trabalho proposto.

### 2.1. Feeding The World: Aplicativo para Doação e Recepção de Alimentos.

Feeding The World é um sistema web de doação e recepção de alimentos, cujo principal objetivo é diminuir o desperdício de alimentos no mundo. A melhor forma encontrada pelos autores deste artigo, foi a de desenvolver um site em que o usuário deve efetuar cadastro para doar alimentos ou para receber os alimentos doados.

Figura 1 - Feeding The World tela de login.
fonte:<https://arq.ifsp.edu.br/eventos/index.php/enict/4EnICT/paper/viewFile/414/239>

Figura 2 - Feeding The World tela de cadastro.
fonte:<https://arq.ifsp.edu.br/eventos/index.php/enict/4EnICT/paper/viewFile/414/239>

### 2.2. HYB Sistema Pago de Gestão Para O Terceiro Setor.

O HYB é um sistema pago de gerenciamento de doações em dinheiro por diversas formas de pagamento para entidades sem fins lucrativos. Este disponibiliza a personalização das telas para melhor adequar-se à sua empresa. Dentre as principais funcionalidades temos:
Gestão de doadores e associados - Permite a definição do valor da doação, a regularidade das contribuições, possibilita a verificação de todas as contribuições em atraso e enviar cobranças via e-mail.
Financeiro - Importar extratos bancários, notas fiscais e possibilita previsibilidade no orçamento, exibindo relatórios e gráficos de saúde financeira.

Figura 3 - HYB tela de cadastro e doação.
fonte:<https://hyb.com.br/pagina-de-doacao>

Figura 4 – HYB Tela de Gestão de Dados Associados.
fonte:https://hyb.com.br/recursos
Tabela 1. Comparação.

Após a realização da pesquisa e análise visando encontrar trabalhos com propostas semelhantes, tornou-se evidente que um sistema de gerenciamento de doações de roupas ainda não foi criado. Os trabalhos citados Feeding The World e HYB serviram de base para obter uma melhor compreensão de como um software para gerenciamento e recebimento de doações deve ser, requisitos funcionais necessários e para a modelagem das telas do sistema.

## 3. Metodologia.

Neste capítulo serão demonstradas as principais etapas do desenvolvimento do trabalho proposto, sendo elas: Levantamento de Requisitos, Modelagem do Sistema, Criação de protótipos e Desenvolvimento do Sistema.

Figura 5 - Fluxograma de etapas.

### 3.1. Levantamento de requisitos.

Nesta etapa primeiramente foi realizada uma reunião entre o autor do artigo e seu orientador, visando encontrar as funcionalidades necessárias para a implementação de um sistema que auxilie no gerenciamento de doação de roupas para pessoas carentes. Logo após este processo foi realizada uma análise dos sistemas apresentados no tópico 2, para assim obter uma melhor compreensão das funcionalidades que o sistema proposto deve ter para proporcionar uma melhor experiência e agilidade nas doações.

### 3.2. Modelagem do Sistema.

Durante esta etapa foi criado um diagrama de caso de uso do sistema a partir do levantamento de requisitos. A ferramenta utilizada para o desenvolvimento do diagrama de caso de uso foi o Astah-Community.

### 3.2.1. Caso de Uso.

A figura 6 exibe o caso de uso com as funcionalidades do sistema.

Figura 6 - Caso de uso.

### 3.2.2. Modelo E-R.

A figura 7 exibe o Modelo Entidade Relacionamento do sistema, construído utilizando a ferramenta brModelo.

Figura 7 - Modelo E-R.

### 3.3. Ferramentas utilizadas.

Durante a etapa do desenvolvimento foram utilizadas as seguintes ferramentas: HTML ou Hyper Text Markup Language (Eis, 2011), esta que é uma linguagem de marcação de texto utilizada na estruturação de páginas online, também foi utilizado CSS ou Cascading Style Sheets (Silva, M. S. 2008), este é um mecanismo que apresenta a funcionalidade de estilizar páginas web, estilizações como o posicionamento dos elementos e a cor dos mesmos, para a parte do back-end também foi utilizado PHP ou Hypertext Preprocessor (PHP, 2022), esta é uma linguagem de programação criada para funcionar do lado do servidor, ou seja, o código é interpretado pelo módulo PHP instalado no servidor que também tem a função de gerar a página web visualizada pelo cliente, já para o desenvolvimento do banco de dados foi utilizado o PhpMyAdmin (PhpMyAdmin, 2022), que é uma ferramenta de software livre destinada a administrar o MySQL.

## 4. Sistema desenvolvido.

Nesta seção serão exibidas as principais funcionalidades e telas dispostas pelo sistema em sua versão beta.

### 4.1. Tela inicial.

Esta é a primeira tela visualizada pelo funcionário e os colaboradores, consiste na tela onde é feita a visualização das campanhas disponíveis e possibilitará a transição para a tela de login funcionário, cadastro de funcionário, formulário de doador e formulário donatário.

Figura 8 - Tela inicial.

### 4.2. Login funcionário.

Após o funcionário clicar em "Entrar'' na tela inicial, o mesmo é redirecionado para esta tela que o possibilita efetuar login no sistema.

Figura 9 - Login funcionário.

### 4.3. Cadastro funcionário.

Caso o funcionário não tenha cadastro no sistema, o mesmo pode clicar em “Criar conta” na tela inicial, após isso será redirecionado para esta tela que o possibilita cadastrar seus dados no sistema.

Figura 10 - Cadastro funcionário.

### 4.3.1. Cadastro de credenciais de funcionários.

Após o funcionário clicar em “Enviar” na tela de cadastro funcionário, o mesmo é redirecionado para esta tela que o possibilita cadastrar usuário e senha para efetuar login no sistema posteriormente.

Figura 11 - Cadastro de credenciais de funcionários.

### 4.4. Formulário doador.

Esta é a tela disponibilizada a partir da tela inicial, após o doador clicar em “Seja um colaborador”, o mesmo será redirecionado para o formulário que possibilita ao usuário se cadastrar como doador, para assim ser contatado posteriormente pelo funcionário da ONG.

Figura 12 – Formulário doador.

### 4.4.1. Medidas de vestuário doador.

Esta é a segunda tela do formulário de doador, após o doador clicar em “Enviar”, o mesmo será redirecionado para a última etapa do formulário que possibilita ao usuário se cadastrar como doador, nesta tela será inserido suas medidas de vestuário, deste modo o funcionário da ONG terá disponível uma lista de pessoas com perfil de roupa compatível com o necessitado.

Figura 13 – Medidas de vestuário doador.

### 4.5. Formulário donatário.

Esta é a tela disponibilizada a partir da tela inicial, após o colaborador ou pessoa carente clicar em “Cadastro de pessoa carente”, o mesmo será redirecionado para o formulário que possibilita ao usuário se cadastrar como doador, para assim ser contatado posteriormente pelo funcionário da ONG.

Figura 14 – Formulário donatário.

### 4.5.1. Medidas de vestuário donatário.

Esta é a segunda tela do formulário de donatário, após o colaborador ou pessoa carente clicar em “Enviar”, o mesmo será redirecionado para a última etapa do formulário que possibilita ao usuário se cadastrar como donatário, nesta tela será inserido suas medidas de vestuário, deste modo o funcionário da ONG terá disponível uma lista com as medidas de vestuários de pessoas carente que estejam mais necessitados no momento.

Figura 15 – Medidas de vestuário donatário.

### 4.6. Tela inicial funcionários.

Esta é a primeira tela visualizada pelo funcionário ao realizar login no sistema, a mesma possibilita ao funcionário ter acesso ao cadastro de donatários, criação de campanhas, gerenciar o estoque de roupas, e gerar relatórios.

Figura 16 - Tela inicial funcionários.

### 4.7. Cadastro de Donatário.

Tela onde o funcionário realizará o cadastro de pessoas carentes, da mesma forma que algum colaborador também pode cadastrar donatários através da página inicial.

Figura 17 - Cadastro de donatário.

### 4.7.1. Medidas de Vestuário.

Após o funcionário clicar em “enviar” na tela de de donatário, o mesmo é redirecionado para a tela de inserção dos tamanhos de roupas do donatário.

Figura 18 - Medidas de vestuário.

### 4.8. Criar Campanha.

Nesta tela o funcionário tem a possibilidade de realizar a inserção do nome da campanha e também os tamanhos das peças de roupa mais requisitadas.

Figura 19 - Criar campanha.

### 4.8.1. Visualizar Campanha.

Após o funcionário inserir todos os dados da campanha e clicar em enviar o mesmo é direcionado para esta tela que o possibilita visualizar a campanha que acabou de cadastrar e voltar a tela inicial através do botão “Tela inicial”.

Figura 20 - Visualizar campanha

### 4.9. Controle de Estoque.

Tela onde o funcionário realiza o gerenciamento do estoque físico, lançamentos dos itens recebidos e dos itens que saírem, caso deseje alterar algum dado, basta clicar no ícone de um pincel localizado na coluna com o cabeçalho “Ações”.

Figura 21 - Controle de estoque.

### 4.9.1. Painel de gerenciamento de peças de roupa.

Após o funcionário clicar no pincel para editar o dado, o mesmo é direcionado para esta tela que o possibilita efetuar entrada e saída no respectivo item selecionado.

Figura 22 - Controle de estoque.

## 5. Testes finais.

Nesta etapa foram realizados testes com o objetivo de descobrir possíveis falhas no sistema, a etapa dos testes foi iniciada com a revisão dos códigos de estruturação, estilização e do back-end de todas as páginas que compõem o sistema, após verificar que todas funcionavam corretamente foram iniciados os testes de inserção, atualização, deleção e visualização dos dados. Assim, concluindo os testes foi possível corrigir algumas falhas e com isso garantir a qualidade do sistema. 6. Considerações finais.
Neste trabalho buscou-se proporcionar às ONGs um sistema que auxiliasse no gerenciamento das doações e, que através do mesmo, proporcionasse aos mais vulneráveis qualidade de vida melhor através da obtenção de roupas.
A partir deste sistema web, os funcionários terão um gerenciamento de doações otimizado. Estes terão disponível um banco de dados com o tamanho dos doadores e donatários cadastrados, assim podendo facilmente encontrar tamanhos de roupas adequados para cada donatário. Caso seja necessário contatar os doadores ou os donatários, os funcionários têm a sua disposição o cadastro destes com dados de endereço e seus contatos. Os funcionários também podem atrair mais doações através da criação de campanhas que podem ser disponibilizadas na tela inicial do sistema.
Logo, este trabalho teve como principal objetivo trazer a população uma forma acessível de ser solidário com pessoas carentes que passam por extremas dificuldades diariamente.

## 7. Referências.

KATSURAYAMA, N. As Dificuldades de Gestão das Organizações Não-Governamentais. Artigo que apresenta uma análise das ONGs brasileiras. Disponível em: <https://www.metodista.br/revistas/revistas-metodista/index.php/ReFAE/article/download/1287/1300>.
RELATÓRIO DO DESENVOLVIMENTO HUMANO 2019. Relatório que apresenta uma análise intelectualmente independente e empiricamente fundamentada das principais questões, tendências e políticas do desenvolvimento. Disponível em:<https://hdr.undp.org/sites/default/files/hdr_2019_pt.pdf>
ASTAH COMMUNITY. Astah Community é uma ferramenta de modelagem UML gratuita. Disponível em: <http://astah.net>.
FIGMA. Figma é uma ferramenta de prototipagem de projetos de design gratuita.
Disponível em: <https://www.figma.com>.
BRMODELO. brModelo é uma ferramenta para modelagem de banco de dados gratuita. Disponível em: <http://www.sis4.com/brModelo/>
PRIMEFACES. Primefaces é uma biblioteca para Angular, React, Vue e JSF utilizada
por mais de 5 milhões de desenvolvedores. Disponível em:
<https://www.primefaces.org>.
Eis, D. O básico: O que é HTML?. Tableless, 2011. Disponível em: <https://tableless.com.br/o-que-html-basico/>.
SILVA, M. S. (2008). Criando sites com HTML: sites de alta qualidade com HTML e CSS. Novatec Editora. Disponível em: <https://books.google.com.br/books?id=_HBVQ-w5ZcoC&lpg=PA25&ots=SJfBdUz22X&dq=o%20que%20%C3%A9%20css&lr=lang_pt&hl=pt-BR&pg=PA25#v=onepage&q&f=false>
PHP. Site Oficial. 2022. PHP é uma linguagem de programação disponibilizada gratuitamente, esta é voltada para o desenvolvimento de aplicações web. Disponível em: <https://www.php.net/manual/pt_BR/introwhatis.php>.
PHPMYADMIN, phpmyadmin é uma aplicação web livre e de código aberto desenvolvida em PHP para administração do banco de dados MySQL através da Internet. Disponível em: <https://www.phpmyadmin.net>.
COLOMBO, G., SANTOS, N., S. e ROSALES, G., C. (2019) Feeding The World, trata-se de um sistema web de doação e recepção de alimentos. Disponível em: <https://arq.ifsp.edu.br/eventos/index.php/enict/4EnICT/paper/viewFile/414/239>
HYB. É um sistema pago de gestão para o terceiro setor. Disponível em:<https://hyb.com.br/index>
