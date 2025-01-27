# Установка LaravelTaskExample

## 1. Создание проекта

```bash
composer create-project --prefer-dist laravel/laravel MyWebApp
```

## Установка нашего пакета

Подключение репозитория,
```json
{
  "repositories": {
    "cronv": {
      "type": "vcs",
      "url": "https://github.com/cronv/laravel-task-example.git"
    }
  }
}
```

```bash
$ composer require "cronv/laravel-task-example":"dev-main"
```

## 2. Настройки БД

*tests* - `.env.testing` (Для тестов создайте указанный файл)

```env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_test
DB_USERNAME=root
DB_PASSWORD=pass
```

## 3. Миграция и сидеры

### 3.1 Миграция

```bash
$ php artisan migrate --path=vendor/cronv/laravel-task-example/database/migrations
```

или для настройки, опубликуйте

```bash
$ php artisan vendor:publish --provider="cronv\LaravelTaskExample\LaravelTaskExampleServiceProvider" --tag="migrations"
```

Пример,
```bash
$ php artisan migrate --env=develop
```

> Для тестов не забудьте настроить отдельный файл `--env=testing`

### 3.2 Сидеры

По отдельности,
```bash
$ php artisan db:seed --class="cronv\LaravelTaskExample\Database\Seeders\ManagerSeeder"
```

Всё сразу,

```bash
$ php artisan db:seed --class="cronv\LaravelTaskExample\Database\Seeders\DatabaseSeeder"
```

## Unit тестирование

```bash
$ ./vendor/bin/phpunit ./vendor/cronv/laravel-task-example/tests
```

```bash
$ php artisan test --env=testing
```
