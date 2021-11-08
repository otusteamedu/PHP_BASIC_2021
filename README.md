Собрать единую точку входа

Создать базовый контроллер, который умеет обрабатывать запросы по правилу, 
где при вызове URL mysite.com// будет вызван метод action в классе Name

Вызов контроллера и метода можно привязывать и к короткому URL,
но это должно быть реализовано при помощи конфигурируемых маршрутов

Перед тем, как запускать docker-compose установите зависимости!

cd www

Сначала 
docker run --rm --interactive --tty \
  --volume $PWD:/www \
  composer init

Потом 
docker run --rm --interactive --tty \
  --volume $PWD:/www \
  composer install

Также, укажите в hosts запись
127.0.0.1   plan.online   DONE