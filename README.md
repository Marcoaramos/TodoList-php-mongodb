Projeto: To-Do List com PHP e MongoDB

Título: Desenvolvimento de uma Aplicação To-Do List com PHP, Apache e MongoDB Autor: Marco Aurélio Ramos Data: Novembro/2025

Sumário
1.	Introdução
2.	Tecnologias Utilizadas
3.	Estrutura do Projeto
4.	Etapas de Instalação e Configuração
•	Apache e PHP
•	MongoDB
•	Composer
•	Projeto To-Do List
5.	Testes e Validação
6.	Conclusão

1. Introdução
Este relatório descreve o processo de criação de uma aplicação To-Do List utilizando PHP, Apache2 e MongoDB. O objetivo foi desenvolver um sistema simples de gerenciamento de tarefas com funcionalidades de adicionar, concluir e excluir tarefas.
A aplicação foi instalada em uma máquina virtual, criada através do VirtualBox, rodando uma imagem do sistema Linux Ubuntu (24.04.3-desktop-amd64.iso) instalado no Windows11.

2. Tecnologias Utilizadas
•	Virtual Box, rodando no Windows 11
•	Linux Ubuntu (24.04.3-desktop-amd64.iso)
•	PHP – linguagem de programação backend
•	Apache2 – servidor web
•	MongoDB – banco de dados NoSQL
•	Composer – gerenciador de dependências PHP
•	HTML/CSS – interface básica

3. Estrutura do Projeto
O projeto foi organizado no diretório /var/www/html/todolist, contendo os arquivos principais da aplicação e uma pasta assets para estilos.

4. Etapas de Instalação e Configuração
4.1 Criar a pasta do projeto
sudo mkdir /var/www/html/todolist
cd /var/www/html/todolist

4.2 Criar arquivos e diretórios
sudo mkdir assets
sudo touch index.php add.php update.php delete.php mongodb.php assets/style.css

4.3 Instalar Apache e PHP
sudo apt update
sudo apt install apache2 php libapache2-mod-php -y
sudo systemctl start apache2

4.4 Instalar MongoDB e extensão PHP
sudo apt install mongodb php-mongodb -y
sudo systemctl start mongodb
sudo systemctl restart apache2

4.5 Instalar Composer
sudo apt install curl php-cli unzip -y
curl -sS https://getcomposer.org/installer -o composer-setup.php
php composer-setup.php
sudo mv composer.phar /usr/local/bin/composer
composer –version

4.6 Instalar biblioteca MongoDB para PHP
cd /var/www/html/todolist
composer require mongodb/mongodb

4.7 Ajustar permissões
sudo chown -R $USER:$USER /var/www/html/todolist
sudo chmod -R 755 /var/www/html/todolist

5. Testes e Validação
5.1 Testar Apache e PHP
echo "<?php echo 'Funcionando!'; ?>" | sudo tee /var/www/html/todolist/teste.php

Acessar no navegador:
Descobrir IP da máquina
ip a
IP encontrado: 192.168.1.27

Código
http://192.168.1.27/todolist/teste.php

Acessar no navegador:
Código
http://192.168.1.27/todolist

5.3 Verificar dados no MongoDB
mongosh
use todolist
db.tasks.find().pretty()

6. Conclusão
O projeto To-Do List foi implementado com sucesso utilizando PHP, Apache2 e MongoDB. A aplicação permite adicionar, concluir e excluir tarefas, com persistência dos dados no banco. O processo envolveu a configuração do ambiente, instalação de dependências e integração entre PHP e MongoDB.
A escolha do MongoDB se justifica baseada em sua flexibilidade (documentos JSON não tem a rigidez de uma tabela relacional); integração direta com o PHP, possuindo um código mais enxuto para as operações do CRUD, além da sua alta escalabilidade (mesmo esse exemplo simples de sistema pode ser atualizado e agregar funções mais complexas).
