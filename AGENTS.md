# AGENTS — Инструкции для AI-кодирующих агентов

Короткие, практичные указания, чтобы AI-агент быстро работал с этим репозиторием.

1) Быстрый старт (важные команды)
- **Установить зависимости (PHP):** `composer install` — см. [composer.json](composer.json)
- **Установить зависимости (JS):** `npm install` — см. [package.json](package.json)
- **Запуск разработки (Vite):** `npm run dev` — см. [vite.config.js](vite.config.js)
- **Artisan:** `php artisan serve`, `php artisan migrate`, `php artisan key:generate` — см. файл `artisan`
- **Тесты:** `composer run test` или `./vendor/bin/pest` — см. [phpunit.xml](phpunit.xml) и папку [tests/](tests)
- **Форматирование/линтинг:** `composer run lint` / `composer run lint:check` / `./vendor/bin/pint` — см. [pint.json](pint.json)

2) Где смотреть (ключевые файлы и папки)
- **Конфигурация:** [config/](config)
- **Миграции и сиды:** [database/migrations/](database/migrations), [database/seeders/DatabaseSeeder.php](database/seeders/DatabaseSeeder.php)
- **Модели и домен:** [app/Models](app/Models), [app/](app)
- **Livewire-компоненты:** [app/Livewire](app/Livewire)
- **Fortify (аутентификация):** [app/Providers/FortifyServiceProvider.php](app/Providers/FortifyServiceProvider.php), [app/Actions/Fortify](app/Actions/Fortify)
- **Роуты:** [routes/web.php](routes/web.php), [routes/settings.php](routes/settings.php)
- **Frontend:** [resources/js/app.js](resources/js/app.js), [resources/css/app.css](resources/css/app.css)

3) Проектные конвенции и заметки
- Используется Laravel + Livewire + Fortify.
- Тестовая инфраструктура: Pest (PestPHP) и PHPUnit (конфигурация в `phpunit.xml`).
- Форматирование кода: Laravel Pint (`pint.json`) и composer-скрипты для lint.
- PHP версия: см. требование в [composer.json](composer.json) (рекомендуется PHP 8.3+).

4) Частые проблемы и рекомендации
- На Windows проверять наличие `.env` (есть `.env.example`) и корректность путей к sqlite, если используется.
- Скрипт `setup` может выполнять миграции с `--force` — не запускать в production без проверки.
- Для корректной локальной проверки запустить `composer install`, скопировать `.env.example` → `.env`, выполнить `php artisan key:generate` и `php artisan migrate`.

5) Что агенту можно автоматизировать дальше
- Навыки/скрипты для: автоматического запуска тестов и сбора покрытия, удобных шаблонов PR (fix, feat, test), проверки стиля кода и автоприменения Pint.
- Инструкции для CI: как запускать `composer run lint`, `composer run test`, и сбор frontend-артефактов.

6) Ссылки на полезные файлы
- [composer.json](composer.json)
- [package.json](package.json)
- [phpunit.xml](phpunit.xml)
- [pint.json](pint.json)
- [.env.example](.env.example)

Если хотите, могу: добавить короткий `README.md` с Quick Start, создать отдельную инструкцию в `.github/copilot-instructions.md` или вынести автоматические проверки в отдельный `skill`.
