 ## Executando processos em background com PHP, Redis e um serviço linux
 
 #### Instale as dependencias

 ``
 foo@bar:~$ composer install
 ``

 #### Corrija a linha 6 do arquivo rotinasCadastros-daemon.service de acordo com o path do seu sistema
 
 #### Copie o daemon para /etc/systemd/system/
``
 foo@bar:~$ sudo cp rotinasCadastros-daemon.service /etc/systemd/system/rotinasCadastros-daemon.service
``
#### Habilite o serviço
``
foo@bar:~$ sudo systemctl enable rotinasCadastros-daemon.service
``
#### Execute 

``
foo@bar:~$ sudo service rotinasCadastros-daemon start
``
``
foo@bar:~$ php index.php
``

#### Comandos disponiveis:

- sudo service rotinasCadastros-daemon start
- sudo service rotinasCadastros-daemon stop
- sudo service rotinasCadastros-daemon restart
- sudo service rotinasCadastros-daemon status


