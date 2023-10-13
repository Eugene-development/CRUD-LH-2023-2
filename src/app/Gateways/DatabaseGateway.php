<?php

namespace App\Gateways;

use Illuminate\Support\Facades\DB;

class DatabaseGateway
{
    public static function determineConnectionFromHeader($request)
    {
        // Получите значение из заголовка HTTP-запроса
        $connectionName = $request->header('ConnectionName');

        // Проверьте, существует ли такое подключение в конфигурации базы данных
        if (config("database.connections.$connectionName")) {
            return $connectionName;
        }

        // Возвратите стандартное подключение, если не найдено
        return 'mysql';
    }

    public static function switchConnection($request)
    {
        $connection = self::determineConnectionFromHeader($request);
        // Очистка
        DB::purge('mysql');
        // Замена дефолтного подключения
        config(['database.default' => $connection]);
        // Переключение
        DB::reconnect($connection);
    }
}
