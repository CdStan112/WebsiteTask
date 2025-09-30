# Тестовое задание Techart

Ссылка на рабочий сайт:
https://dev.fun-x.ru/

Для запуска создайте файл .env с таким содержанием:

DB_PASSWORD=sfCt8FJCAo05LTZR
DB_DATABASE=news
DB_USER=news

Далее собираем образ для Docker:

docker compose build

Запускаем контейнер Docker:

docker compose up -d

Сайт будет доступен по адресу:

localhost:9999
