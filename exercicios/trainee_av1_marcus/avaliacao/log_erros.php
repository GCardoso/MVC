[03-Jan-2017 16:44:33 America/Sao_Paulo] PHP Warning:  file_get_contents(database.json): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:44:33 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php:9
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(10): JSONConfig::setJson('database.json')
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:44:35 America/Sao_Paulo] PHP Warning:  file_get_contents(database.json): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:44:35 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php:9
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(10): JSONConfig::setJson('database.json')
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:44:36 America/Sao_Paulo] PHP Warning:  file_get_contents(database.json): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:44:36 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php:9
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(10): JSONConfig::setJson('database.json')
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:44:49 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Using $this when not in object context in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php:9
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(10): JSONConfig::setJson('classes/databas...')
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/JsonConfig.php on line 9
[03-Jan-2017 16:50:58 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 16:50:58 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 16:51:57 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 16:51:57 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 16:52:02 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 16:52:02 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 16:58:13 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 16:58:13 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 16:59:04 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 16:59:04 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:00:10 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:00:10 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:00:59 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:00:59 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:03:52 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:03:52 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:03:57 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:03:57 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:04:06 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:04:06 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:04:10 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:04:10 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(14): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:07:24 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[03-Jan-2017 17:07:24 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(15): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('amidna', '221321')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[03-Jan-2017 17:17:02 America/Sao_Paulo] PHP Notice:  Undefined variable: aJson in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:17:02 America/Sao_Paulo] PHP Warning:  Invalid argument supplied for foreach() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:18:28 America/Sao_Paulo] PHP Notice:  Undefined variable: aJson in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:18:28 America/Sao_Paulo] PHP Warning:  Invalid argument supplied for foreach() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:19:32 America/Sao_Paulo] PHP Notice:  Undefined variable: aJson in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:19:32 America/Sao_Paulo] PHP Warning:  Invalid argument supplied for foreach() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:19:42 America/Sao_Paulo] PHP Notice:  Undefined variable: aJson in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:19:42 America/Sao_Paulo] PHP Warning:  Invalid argument supplied for foreach() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:19:46 America/Sao_Paulo] PHP Notice:  Undefined variable: aJson in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:19:46 America/Sao_Paulo] PHP Warning:  Invalid argument supplied for foreach() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 15
[03-Jan-2017 17:22:39 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')', expecting ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 17
[03-Jan-2017 17:23:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')', expecting ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 17
[03-Jan-2017 17:27:13 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:27:43 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:27:44 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:27:44 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:27:51 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:27:52 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:28:25 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')', expecting variable (T_VARIABLE) or '{' or '$' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:28:40 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:30:08 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:30:59 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(39): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(39): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:01 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(39): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:01 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(39): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:01 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(39): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:29 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:34 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Warning:  include_once(/var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening '/var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:31:58 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:31:59 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 2
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Warning:  include_once(classes/sessao.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'classes/sessao.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 5
[03-Jan-2017 17:32:41 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:33:14 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:33:15 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'SESSION' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:34:08 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 51
[03-Jan-2017 17:35:12 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ';', expecting ',' or ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 19
[03-Jan-2017 17:35:56 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php on line 31
[03-Jan-2017 17:37:41 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'Session' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php:22
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(23): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(37): LoginController->paginaInicial()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/paginaInicial.php on line 22
[03-Jan-2017 17:38:05 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:05 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:14 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:14 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:23 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:23 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:54 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:38:54 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:21 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:21 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:21 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:21 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:22 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:22 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:26 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:39:26 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:00 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:00 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:01 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:01 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:01 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:01 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:01 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:01 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:02 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:02 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:02 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:02 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:03 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 51
[03-Jan-2017 17:40:07 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:07 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:28 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:28 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:29 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:29 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:29 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:40:29 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:41:02 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:41:02 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:41:03 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:41:03 America/Sao_Paulo] PHP Notice:  Undefined variable: _SESSION in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:44:08 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:44:08 America/Sao_Paulo] PHP Notice:  Undefined index: time in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 17:55:57 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 17:56:16 America/Sao_Paulo] PHP Fatal error:  Cannot use isset() on the result of an expression (you can use "null !== expression" instead) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 11
[03-Jan-2017 17:56:31 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method UsuarioController::setPostData() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:32
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 32
[03-Jan-2017 17:57:11 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method UsuarioController::setPostData() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:32
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 32
[03-Jan-2017 17:57:11 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method UsuarioController::setPostData() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:32
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 32
[03-Jan-2017 17:57:12 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method UsuarioController::setPostData() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:32
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 32
[03-Jan-2017 17:57:41 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 17:57:41 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method UsuarioController::setPostData() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:32
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 32
[03-Jan-2017 17:57:52 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method UsuarioController::setPostData() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:32
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 32
[03-Jan-2017 18:00:14 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:00:14 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:00:39 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:12:59 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:12:59 America/Sao_Paulo] PHP Fatal error:  Cannot declare class Constantes, because the name is already in use in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Constantes.php on line 4
[03-Jan-2017 18:13:17 America/Sao_Paulo] PHP Fatal error:  Cannot declare class Constantes, because the name is already in use in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Constantes.php on line 4
[03-Jan-2017 18:13:18 America/Sao_Paulo] PHP Fatal error:  Cannot declare class Constantes, because the name is already in use in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Constantes.php on line 4
[03-Jan-2017 18:13:18 America/Sao_Paulo] PHP Fatal error:  Cannot declare class Constantes, because the name is already in use in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Constantes.php on line 4
[03-Jan-2017 18:20:21 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:20:33 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:25:25 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:25:25 America/Sao_Paulo] PHP Notice:  Use of undefined constant APP_ROOT - assumed 'APP_ROOT' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/AbstractController.php on line 16
[03-Jan-2017 18:26:22 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:26:22 America/Sao_Paulo] PHP Notice:  Undefined index: id_perfil in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:26:22 America/Sao_Paulo] PHP Notice:  Undefined index: id_perfil in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:26:34 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:26:34 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:26:34 America/Sao_Paulo] PHP Notice:  Undefined index: time in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:26:44 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[03-Jan-2017 18:29:19 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:30:14 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:30:59 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:46:42 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 18:46:51 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 19:01:21 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[03-Jan-2017 19:01:26 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:06:23 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:10:02 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:14:07 America/Sao_Paulo] PHP Notice:  Undefined offset: 0 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 52
[04-Jan-2017 09:14:07 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:75
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(15): MoobiDatabaseHandler::begin(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Login.php(14): Usuario::listar()
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(32): Login::autenticar('admin', '123456')
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): LoginController->logar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 75
[04-Jan-2017 09:14:42 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:14:56 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:15:06 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:16:40 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:17:42 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:8
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 8
[04-Jan-2017 09:18:07 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:18:19 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:18:19 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:18:25 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:13 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:14 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:14 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:18 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:18 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:19 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:27 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:28 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:29 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:30 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:30 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:30 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:43 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:19:43 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:20:09 America/Sao_Paulo] PHP Catchable fatal error:  Object of class stdClass could not be converted to string in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:20:26 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type stdClass as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:7
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 7
[04-Jan-2017 09:21:36 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:21:42 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:22:49 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:29:19 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:30:52 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 09:30:52 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 09:30:52 America/Sao_Paulo] PHP Notice:  Undefined index: time in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 09:33:00 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:33:09 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 09:33:09 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 09:33:09 America/Sao_Paulo] PHP Notice:  Undefined index: time in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 09:40:18 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:45:39 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:49:56 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:50:52 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 09:59:16 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 10:09:59 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 10:17:09 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '"password"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:18:27 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '"password"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:18:38 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '"password"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:18:45 America/Sao_Paulo] PHP Notice:  Undefined index: login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 40
[04-Jan-2017 10:18:45 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:19:18 America/Sao_Paulo] PHP Notice:  Undefined index: login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 40
[04-Jan-2017 10:19:18 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:19:28 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:19:39 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 41
[04-Jan-2017 10:27:18 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'class' (T_CLASS) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 8
[04-Jan-2017 10:28:10 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 30
[04-Jan-2017 10:29:09 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 30
[04-Jan-2017 10:29:40 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '","' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 30
[04-Jan-2017 10:31:35 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 30
[04-Jan-2017 10:31:35 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 2 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(31): MoobiDatabaseHandler::execute('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:31:57 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 2 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(31): MoobiDatabaseHandler::execute('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:34:27 America/Sao_Paulo] PHP Warning:  print_r() expects parameter 2 to be boolean, object given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 31
[04-Jan-2017 10:34:40 America/Sao_Paulo] PHP Warning:  print_r() expects at most 2 parameters, 3 given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 31
[04-Jan-2017 10:36:23 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'marcus' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:37:09 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '"),1) . "' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 31
[04-Jan-2017 10:38:02 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'marcus' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:39:12 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'marcus' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:39:51 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'marcus' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:47:14 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:48:12 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:48:47 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(35): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:50:27 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(37): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:52:19 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function prepare() on array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(37): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#3 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:52:54 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(37): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:56:58 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 38
[04-Jan-2017 10:56:58 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'senha' cannot be null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(39): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 10:58:59 America/Sao_Paulo] PHP Warning:  Missing argument 1 for MoobiDatabaseHandler::commit(), called in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 34 and defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 80
[04-Jan-2017 10:58:59 America/Sao_Paulo] PHP Notice:  Undefined variable: rConexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 81
[04-Jan-2017 10:58:59 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function commit() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:81
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(34): MoobiDatabaseHandler::commit()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#3 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 81
[04-Jan-2017 10:59:05 America/Sao_Paulo] PHP Warning:  Missing argument 1 for MoobiDatabaseHandler::commit(), called in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 34 and defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 80
[04-Jan-2017 10:59:05 America/Sao_Paulo] PHP Notice:  Undefined variable: rConexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 81
[04-Jan-2017 10:59:05 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to a member function commit() on null in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:81
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(34): MoobiDatabaseHandler::commit()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#3 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 81
[04-Jan-2017 11:00:52 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 11:08:56 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 11:09:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: MoobiDatabaseHandler::$aconexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php:28
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 28
[04-Jan-2017 11:09:21 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: MoobiDatabaseHandler::$aconexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php:28
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 28
[04-Jan-2017 11:09:26 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: MoobiDatabaseHandler::$aconexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php:28
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 28
[04-Jan-2017 11:09:38 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: MoobiDatabaseHandler::$aconexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php:28
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 28
[04-Jan-2017 11:09:45 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: MoobiDatabaseHandler::$aconexao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php:28
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(45): Usuario::registrar(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->salvar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 28
[04-Jan-2017 11:31:35 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 11:34:44 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 12:27:07 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 53
[04-Jan-2017 12:27:24 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(47): MoobiDatabaseHandler::execute('DELETE FROM av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:28:26 America/Sao_Paulo] PHP Warning:  array_push() expects parameter 1 to be array, null given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 47
[04-Jan-2017 12:28:26 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: no parameters were bound in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(48): MoobiDatabaseHandler::execute('DELETE FROM av1...', NULL, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:28:53 America/Sao_Paulo] PHP Warning:  PDOStatement::execute() expects parameter 1 to be array, integer given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:29:18 America/Sao_Paulo] PHP Warning:  PDOStatement::execute() expects parameter 1 to be array, integer given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:30:21 America/Sao_Paulo] PHP Warning:  PDOStatement::execute() expects parameter 1 to be array, integer given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:31:42 America/Sao_Paulo] PHP Warning:  PDOStatement::execute() expects parameter 1 to be array, integer given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:31:43 America/Sao_Paulo] PHP Warning:  PDOStatement::execute() expects parameter 1 to be array, integer given in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:32:40 America/Sao_Paulo] PHP Notice:  Undefined variable: aAux in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 49
[04-Jan-2017 12:32:40 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: no parameters were bound in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(NULL)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(49): MoobiDatabaseHandler::execute('DELETE FROM av1...', NULL, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:32:48 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(49): MoobiDatabaseHandler::execute('DELETE FROM av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:33:13 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(49): MoobiDatabaseHandler::execute('DELETE FROM av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:33:13 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(49): MoobiDatabaseHandler::execute('DELETE FROM av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:33:19 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(49): MoobiDatabaseHandler::execute('DELETE FROM av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:34:28 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(49): MoobiDatabaseHandler::execute('DELETE FROM av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(68): Usuario::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[04-Jan-2017 12:35:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 47
[04-Jan-2017 12:40:54 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 12:50:31 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 14:52:29 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 14:52:29 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 14:52:29 America/Sao_Paulo] PHP Notice:  Undefined index: time in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[04-Jan-2017 14:54:32 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 15:04:24 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:04:33 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:04:34 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:04:35 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:04:48 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:05 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:06 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:06 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:06 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:06 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:26 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:05:29 America/Sao_Paulo] PHP Notice:  Undefined variable: id in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 63
[04-Jan-2017 15:08:21 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 84
[04-Jan-2017 15:09:48 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'require' (T_REQUIRE) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:10:03 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'require' (T_REQUIRE) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:10:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'require' (T_REQUIRE) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:10:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'require' (T_REQUIRE) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:10:13 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:14 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:29 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:29 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:29 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:29 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:29 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:29 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:38 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:38 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:38 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:38 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:38 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:38 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:39 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:10:39 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:09 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:09 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:09 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:09 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:09 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:09 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:12 America/Sao_Paulo] PHP Warning:  require(view/editarUsuarios.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:11:12 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/editarUsuarios.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:19:27 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 15:20:39 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 15:25:15 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 15:32:12 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type PDOStatement as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php:32
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(81): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->editar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 32
[04-Jan-2017 15:33:55 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:34:02 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:34:02 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:34:03 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:34:07 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:34:24 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:35:40 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 81
[04-Jan-2017 15:36:14 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot use object of type PDOStatement as array in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php:82
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->editar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:36:29 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:36:34 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:36:35 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:36:35 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:36:35 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:36:35 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 82
[04-Jan-2017 15:37:21 America/Sao_Paulo] PHP Fatal error:  An iterator cannot be used with foreach by reference in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/editarUsuarios.php on line 27
[04-Jan-2017 15:47:43 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 15:56:31 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 16:00:31 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 16:12:02 America/Sao_Paulo] PHP Notice:  Undefined variable: key in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/cadastrarUsuarios.php on line 53
[04-Jan-2017 16:12:02 America/Sao_Paulo] PHP Notice:  Undefined variable: key in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/cadastrarUsuarios.php on line 55
[04-Jan-2017 16:12:17 America/Sao_Paulo] PHP Notice:  Undefined variable: key in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/cadastrarUsuarios.php on line 53
[04-Jan-2017 16:12:17 America/Sao_Paulo] PHP Notice:  Undefined variable: key in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/cadastrarUsuarios.php on line 55
[04-Jan-2017 16:21:19 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:38 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:39 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:39 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:40 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:40 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:41 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:41 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:21:41 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 43
[04-Jan-2017 16:57:41 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:09:00 America/Sao_Paulo] PHP Notice:  Undefined index: login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 86
[04-Jan-2017 17:09:07 America/Sao_Paulo] PHP Notice:  Undefined index: login in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 86
[04-Jan-2017 17:09:23 America/Sao_Paulo] PHP Notice:  Array to string conversion in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 86
[04-Jan-2017 17:21:25 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:22:54 America/Sao_Paulo] PHP Notice:  Undefined index: id_user in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 75
[04-Jan-2017 17:22:54 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(76): MoobiDatabaseHandler::executeAux('UPDATE av1_Usua...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(86): Usuario::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[04-Jan-2017 17:24:04 America/Sao_Paulo] PHP Notice:  Undefined index: id_user in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 75
[04-Jan-2017 17:24:04 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(76): MoobiDatabaseHandler::executeAux('UPDATE av1_Usua...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(86): Usuario::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[04-Jan-2017 17:24:06 America/Sao_Paulo] PHP Notice:  Undefined index: id_user in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php on line 75
[04-Jan-2017 17:24:06 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(76): MoobiDatabaseHandler::executeAux('UPDATE av1_Usua...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(86): Usuario::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): UsuarioController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[04-Jan-2017 17:26:59 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:28:03 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:28:29 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:31:51 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:34:08 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:37:26 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:41:41 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:48:55 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:53:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected end of file in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/gerirUsuarios.php on line 65
[04-Jan-2017 17:54:34 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:57:03 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:57:03 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 64
[04-Jan-2017 17:57:08 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 64
[04-Jan-2017 17:57:11 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 17:57:51 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:57:53 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 17:58:26 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 17:58:35 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 17:58:36 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 17:59:58 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:00:00 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 18:00:37 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:00:38 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 18:00:42 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 18:00:46 America/Sao_Paulo] PHP Notice:  Use of undefined constant id_perfil - assumed 'id_perfil' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php on line 62
[04-Jan-2017 18:01:53 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:02:41 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:04:37 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:04:52 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:05:43 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:07:00 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:17:40 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:42:05 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:05 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:05 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:05 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 2
[04-Jan-2017 18:42:05 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 2
[04-Jan-2017 18:42:05 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 2
[04-Jan-2017 18:42:06 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:06 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:06 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:06 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 2
[04-Jan-2017 18:42:06 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 2
[04-Jan-2017 18:42:06 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 2
[04-Jan-2017 18:42:19 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:19 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:19 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:39 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:48 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:48 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:48 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:49 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:49 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:49 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:49 America/Sao_Paulo] PHP Notice:  Use of undefined constant MENSAGEM - assumed 'MENSAGEM' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:49 America/Sao_Paulo] PHP Warning:  include_once(MENSAGEM): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:42:49 America/Sao_Paulo] PHP Warning:  include_once(): Failed opening 'MENSAGEM' for inclusion (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 6
[04-Jan-2017 18:43:05 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[04-Jan-2017 18:44:25 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 09:13:39 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 09:16:29 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 09:16:44 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 09:28:10 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 09:28:24 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 09:49:36 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 09:49:47 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 09:50:52 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 09:57:53 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 10:01:03 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '?>' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsCadastro/cadastrarEmpresa.php on line 16
[05-Jan-2017 10:09:43 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 10:10:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 10:10:02 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 10:12:40 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 10:13:14 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method EmpresaController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:43
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 43
[05-Jan-2017 10:15:06 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 10:33:55 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Empresa::salvar() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php:29
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->registrar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 29
[05-Jan-2017 10:34:22 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(19): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(29): Empresa::salvar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->registrar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[05-Jan-2017 10:34:50 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(19): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(29): Empresa::salvar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->registrar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[05-Jan-2017 10:34:54 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:87
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(87): PDOStatement->execute(Array)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(19): MoobiDatabaseHandler::execute('INSERT INTO av1...', Array, Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(29): Empresa::salvar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->registrar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 87
[05-Jan-2017 10:35:34 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'var_dump' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 20
[05-Jan-2017 10:35:44 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'var_dump' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 20
[05-Jan-2017 10:38:13 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'rabbit' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(19): MoobiDatabaseHandler::executeAux('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(29): Empresa::salvar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->registrar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 10:38:37 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'rabbit' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(19): MoobiDatabaseHandler::executeAux('INSERT INTO av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(29): Empresa::salvar(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->registrar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 10:53:40 America/Sao_Paulo] PHP Warning:  require(view/viewListar/listarEmpresa.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 43
[05-Jan-2017 10:53:40 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/viewListar/listarEmpresa.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 43
[05-Jan-2017 11:41:44 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 11:52:00 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Empresa::buscaUnica() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php:66
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->editar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:52:39 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Empresa::buscaUnica() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php:66
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->editar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:52:40 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Empresa::buscaUnica() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php:66
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->editar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:52:43 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Empresa::buscaUnica() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php:66
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->editar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:52:43 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Empresa::buscaUnica() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php:66
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->editar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:53:17 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ')' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 72
[05-Jan-2017 11:53:32 America/Sao_Paulo] PHP Notice:  Undefined variable: id_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:53:49 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:53:57 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:53:58 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:53:58 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:54:05 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:54:23 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:54:30 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:54:30 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:54:30 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:54:31 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '<' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 67
[05-Jan-2017 11:56:05 America/Sao_Paulo] PHP Notice:  Undefined variable: aId_Empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:19 America/Sao_Paulo] PHP Notice:  Undefined variable: aId_Empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:34 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:53 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:53 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:56 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:57 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:57 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:56:59 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:57:01 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:57:01 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:57:01 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 11:57:02 America/Sao_Paulo] PHP Notice:  Undefined variable: iId_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 66
[05-Jan-2017 12:00:49 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 17
[05-Jan-2017 12:01:54 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 12:02:37 America/Sao_Paulo] PHP Catchable fatal error:  Object of class PDOStatement could not be converted to string in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:02:45 America/Sao_Paulo] PHP Catchable fatal error:  Object of class PDOStatement could not be converted to string in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:02:45 America/Sao_Paulo] PHP Catchable fatal error:  Object of class PDOStatement could not be converted to string in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:02:46 America/Sao_Paulo] PHP Catchable fatal error:  Object of class PDOStatement could not be converted to string in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:02:46 America/Sao_Paulo] PHP Catchable fatal error:  Object of class PDOStatement could not be converted to string in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:02:53 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$nome in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:02:53 America/Sao_Paulo] PHP Notice:  Undefined property: PDOStatement::$nome in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarEmpresa.php on line 35
[05-Jan-2017 12:12:09 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[05-Jan-2017 12:28:07 America/Sao_Paulo] PHP Notice:  Undefined index: nome in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php on line 73
[05-Jan-2017 12:32:06 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id_empresa=8' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(82): MoobiDatabaseHandler::executeAux('UPDATE av1_empr...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(74): Empresa::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 12:36:07 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'RABBITs' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(82): MoobiDatabaseHandler::executeAux('UPDATE av1_empr...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(74): Empresa::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 12:38:27 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '=' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 81
[05-Jan-2017 12:38:40 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'RABBIT' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(82): MoobiDatabaseHandler::executeAux('UPDATE av1_empr...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(74): Empresa::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 12:38:46 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'RABBIT' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(82): MoobiDatabaseHandler::executeAux('UPDATE av1_empr...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(74): Empresa::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 12:40:25 America/Sao_Paulo] PHP Notice:  Undefined index: nome in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 83
[05-Jan-2017 12:40:25 America/Sao_Paulo] PHP Notice:  Undefined index: id_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php on line 83
[05-Jan-2017 12:40:25 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id_empresa=' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(84): MoobiDatabaseHandler::executeAux('UPDATE av1_empr...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(74): Empresa::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): EmpresaController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[05-Jan-2017 12:41:16 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'RABBIT' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Empresa.php(84): MoobiDatabaseHandler::executeAux('UPDATE av1_empr...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/EmpresaController.php(74): Empresa::update(Array)
[06-Jan-2017 11:58:07 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 12:14:17 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'id_situacao' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Situacao.php:73
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Situacao.php(73): PDO->query('SELECT id_situa...')
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/SituacaoController.php(78): Situacao::buscaUnica(Array)
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(40): SituacaoController->editar()
#3 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Situacao.php on line 73
[06-Jan-2017 12:29:13 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 12:29:17 America/Sao_Paulo] PHP Notice:  Undefined index: id_empresa in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/viewsEditar/editarSituacaoUser.php on line 38
[06-Jan-2017 12:33:38 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 12:36:20 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 13:00:45 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:01:01 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:01:01 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:01:02 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:01:28 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:01:28 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:01:28 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 31
[06-Jan-2017 13:02:03 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:04 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:05 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:05 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:06 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:07 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:46 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 13:02:47 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 14:56:53 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 14:57:31 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected 'alert' (T_STRING), expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 32
[06-Jan-2017 15:00:11 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 33
[06-Jan-2017 15:00:12 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 33
[06-Jan-2017 15:09:59 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:23
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 23
[06-Jan-2017 15:10:09 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:23
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 23
[06-Jan-2017 15:10:10 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:23
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 23
[06-Jan-2017 15:10:11 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:23
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 23
[06-Jan-2017 15:10:11 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:23
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 23
[06-Jan-2017 15:10:14 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php:11
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(39): Avisos::setAviso('Login e/ou Senh...', 9)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 11
[06-Jan-2017 15:10:36 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php:11
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(39): Avisos::setAviso('Login e/ou Senh...', 9)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 11
[06-Jan-2017 15:10:37 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Access to undeclared static property: Avisos::$sMsg in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php:11
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(39): Avisos::setAviso('Login e/ou Senh...', 9)
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 11
[06-Jan-2017 15:21:18 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:32 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:32 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:38 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:46 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:47 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:47 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:47 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:21:47 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:28 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:29 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:29 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:34 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:34 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:35 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:39 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:39 America/Sao_Paulo] PHP Parse error:  syntax error, unexpected '{' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:22:57 America/Sao_Paulo] PHP Fatal error:  Cannot use isset() on the result of an expression (you can use "null !== expression" instead) in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 24
[06-Jan-2017 15:24:04 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 15:24:04 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:24:20 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 15:24:20 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:24:42 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 15:24:42 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:24:51 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 15:24:51 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:25:10 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 15:25:10 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:25:49 America/Sao_Paulo] PHP Notice:  A session had already been started - ignoring session_start() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 13
[06-Jan-2017 15:25:49 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:26:03 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:26:27 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:26:30 America/Sao_Paulo] PHP Notice:  Undefined index: nome in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 34
[06-Jan-2017 15:26:30 America/Sao_Paulo] PHP Notice:  Undefined index: senha in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 34
[06-Jan-2017 15:26:30 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginSuccess() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:39
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 39
[06-Jan-2017 15:26:39 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::unsetAvisoLoginFail() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php:36
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->logar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 36
[06-Jan-2017 15:46:15 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Cannot access private property Avisos::$sAviso in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:20
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 20
[06-Jan-2017 15:49:55 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::Mensagem() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:14
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 14
[06-Jan-2017 15:49:56 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::Mensagem() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:14
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 14
[06-Jan-2017 15:52:02 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:09 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:10 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:17 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:36 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:37 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:38 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:38 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:41 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:55 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:52:55 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:00 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:01 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:01 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:03 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:03 America/Sao_Paulo] PHP Notice:  Undefined variable: iTipo in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:19 America/Sao_Paulo] PHP Notice:  Undefined variable: iFormato in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:53:24 America/Sao_Paulo] PHP Notice:  Undefined variable: iFormato in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Avisos.php on line 21
[06-Jan-2017 15:54:33 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method Avisos::Mensagem() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php:14
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php(13): require()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): LoginController->entrar()
#2 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/view/login.php on line 14
[06-Jan-2017 16:27:03 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'Cargo' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php:33
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): CargoController->registrar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php on line 33
[06-Jan-2017 16:27:28 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'Cargo' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php:33
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): CargoController->registrar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php on line 33
[06-Jan-2017 17:13:26 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Class 'Situacao' not found in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php:59
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): CargoController->deletar()
#1 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php on line 59
[06-Jan-2017 17:13:43 America/Sao_Paulo] PHP Notice:  Undefined index: id_situacao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Cargo.php on line 48
[06-Jan-2017 17:13:43 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Cargo.php(49): MoobiDatabaseHandler::executeAux('DELETE FROM av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php(59): Cargo::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): CargoController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[06-Jan-2017 17:13:44 America/Sao_Paulo] PHP Notice:  Undefined index: id_situacao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Cargo.php on line 48
[06-Jan-2017 17:13:44 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Cargo.php(49): MoobiDatabaseHandler::executeAux('DELETE FROM av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php(59): Cargo::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): CargoController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[06-Jan-2017 17:13:45 America/Sao_Paulo] PHP Notice:  Undefined index: id_situacao in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Cargo.php on line 48
[06-Jan-2017 17:13:45 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Cargo.php(49): MoobiDatabaseHandler::executeAux('DELETE FROM av1...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/CargoController.php(59): Cargo::remover(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): CargoController->deletar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[06-Jan-2017 17:56:27 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column '123456mvs' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(74): MoobiDatabaseHandler::executeAux('UPDATE av1_Usua...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(92): Usuario::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): UsuarioController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[06-Jan-2017 17:56:51 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'jasdhkas' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(74): MoobiDatabaseHandler::executeAux('UPDATE av1_Usua...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(92): Usuario::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): UsuarioController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[06-Jan-2017 17:58:13 America/Sao_Paulo] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'jasdhkas' in 'field list' in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php:114
Stack trace:
#0 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php(114): PDOStatement->execute()
#1 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/model/Usuario.php(74): MoobiDatabaseHandler::executeAux('UPDATE av1_Usua...', Object(PDO))
#2 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/UsuarioController.php(92): Usuario::update(Array)
#3 /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php(42): UsuarioController->atualizar()
#4 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/MoobiDatabaseHandler.php on line 114
[06-Jan-2017 18:10:45 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method LoginController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:45
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 45
[06-Jan-2017 18:11:34 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method LoginController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:45
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 45
[06-Jan-2017 18:16:40 America/Sao_Paulo] PHP Warning:  require(views/alertas/loginsuccess.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 41
[06-Jan-2017 18:16:40 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'views/alertas/loginsuccess.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 41
[06-Jan-2017 18:17:01 America/Sao_Paulo] PHP Warning:  require(view/alertas/loginsuccess.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 41
[06-Jan-2017 18:17:01 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/alertas/loginsuccess.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 41
[06-Jan-2017 18:18:43 America/Sao_Paulo] PHP Warning:  require(view/alertas/loginfail.php): failed to open stream: No such file or directory in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 41
[06-Jan-2017 18:18:43 America/Sao_Paulo] PHP Fatal error:  require(): Failed opening required 'view/alertas/loginfail.php' (include_path='.:/usr/share/php') in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/controller/LoginController.php on line 41
[06-Jan-2017 18:33:21 America/Sao_Paulo] PHP Fatal error:  Uncaught Error: Call to undefined method LoginController::definirAcesso() in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php:45
Stack trace:
#0 {main}
  thrown in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/index.php on line 45
[06-Jan-2017 18:34:00 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[06-Jan-2017 18:34:00 America/Sao_Paulo] PHP Notice:  Undefined index: id_perfil in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[06-Jan-2017 18:34:00 America/Sao_Paulo] PHP Notice:  Undefined index: id_perfil in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[06-Jan-2017 18:35:53 America/Sao_Paulo] PHP Notice:  Undefined index: logado in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[06-Jan-2017 18:35:53 America/Sao_Paulo] PHP Notice:  Undefined index: id_perfil in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[06-Jan-2017 18:35:53 America/Sao_Paulo] PHP Notice:  Undefined index: id_perfil in /var/www/html/exercicios/trainee_av1_marcus/avaliacao/classes/Sessao.php on line 25
[07-Jan-2017 12:27:49 UTC] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'id_perfil' in 'field list' in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php:16
Stack trace:
#0 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php(16): PDO->query('SELECT id_user,...')
#1 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Login.php(15): Usuario::listar()
#2 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\LoginController.php(34): Login::autenticar('admin', '1234567')
#3 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php(42): LoginController->logar()
#4 {main}
  thrown in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php on line 16
[07-Jan-2017 12:28:01 UTC] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'id_perfil' in 'field list' in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php:16
Stack trace:
#0 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php(16): PDO->query('SELECT id_user,...')
#1 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Login.php(15): Usuario::listar()
#2 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\LoginController.php(34): Login::autenticar('admin', '123456')
#3 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php(42): LoginController->logar()
#4 {main}
  thrown in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php on line 16
[07-Jan-2017 12:35:07 UTC] PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'av1_marcus.av1_empresa' doesn't exist in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Empresa.php:38
Stack trace:
#0 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Empresa.php(38): PDO->query('SELECT id_empre...')
#1 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\EmpresaController.php(47): Empresa::listar()
#2 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php(42): EmpresaController->gerirEmpresa()
#3 {main}
  thrown in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Empresa.php on line 38
[07-Jan-2017 12:43:25 UTC] PHP Notice:  Undefined offset: 0 in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\MoobiDatabaseHandler.php on line 52
[07-Jan-2017 12:43:25 UTC] PHP Stack trace:
[07-Jan-2017 12:43:25 UTC] PHP   1. {main}() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:0
[07-Jan-2017 12:43:25 UTC] PHP   2. LoginController->logar() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:42
[07-Jan-2017 12:43:25 UTC] PHP   3. Login::autenticar() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\LoginController.php:34
[07-Jan-2017 12:43:25 UTC] PHP   4. Usuario::listar() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Login.php:15
[07-Jan-2017 12:43:25 UTC] PHP   5. MoobiDatabaseHandler::getInstance() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php:14
[07-Jan-2017 12:43:25 UTC] PHP Fatal error:  Uncaught Error: Call to a member function beginTransaction() on null in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\MoobiDatabaseHandler.php:75
Stack trace:
#0 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\model\Usuario.php(15): MoobiDatabaseHandler::begin(NULL)
#1 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Login.php(15): Usuario::listar()
#2 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\LoginController.php(34): Login::autenticar('asdklasj', 'ajskhdkah')
#3 C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php(42): LoginController->logar()
#4 {main}
  thrown in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\MoobiDatabaseHandler.php on line 75
[08-Jan-2017 03:12:12 UTC] PHP Notice:  Undefined index: logado in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Sessao.php on line 25
[08-Jan-2017 03:12:12 UTC] PHP Stack trace:
[08-Jan-2017 03:12:12 UTC] PHP   1. {main}() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:0
[08-Jan-2017 03:12:12 UTC] PHP   2. AbstractController->__construct() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:35
[08-Jan-2017 03:12:12 UTC] PHP   3. Login::validarAcesso() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\AbstractController.php:13
[08-Jan-2017 03:12:12 UTC] PHP   4. Sessao::getsessao() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Login.php:10
[08-Jan-2017 03:12:12 UTC] PHP Notice:  Undefined index: id_perfil in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Sessao.php on line 25
[08-Jan-2017 03:12:12 UTC] PHP Stack trace:
[08-Jan-2017 03:12:12 UTC] PHP   1. {main}() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:0
[08-Jan-2017 03:12:12 UTC] PHP   2. CargoController->editar() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:42
[08-Jan-2017 03:12:12 UTC] PHP   3. Sessao::getsessao() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\CargoController.php:75
[08-Jan-2017 03:12:12 UTC] PHP Notice:  Undefined index: logado in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Sessao.php on line 25
[08-Jan-2017 03:12:12 UTC] PHP Stack trace:
[08-Jan-2017 03:12:12 UTC] PHP   1. {main}() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:0
[08-Jan-2017 03:12:12 UTC] PHP   2. CargoController->editar() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:42
[08-Jan-2017 03:12:12 UTC] PHP   3. require() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\CargoController.php:78
[08-Jan-2017 03:12:12 UTC] PHP   4. Sessao::getsessao() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\view\viewsEditar\editarCargoUser.php:29
[08-Jan-2017 03:12:12 UTC] PHP Notice:  Undefined index: time in C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\classes\Sessao.php on line 25
[08-Jan-2017 03:12:12 UTC] PHP Stack trace:
[08-Jan-2017 03:12:12 UTC] PHP   1. {main}() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:0
[08-Jan-2017 03:12:12 UTC] PHP   2. CargoController->editar() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\index.php:42
[08-Jan-2017 03:12:12 UTC] PHP   3. require() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\controller\CargoController.php:78
[08-Jan-2017 03:12:12 UTC] PHP   4. Sessao::getsessao() C:\wamp64\www\exercicios\trainee_av1_marcus\avaliacao\view\viewsEditar\editarCargoUser.php:29
