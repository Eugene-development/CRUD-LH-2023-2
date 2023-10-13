<?php

namespace App\Models;


use App\Gateways\DatabaseGateway;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class RootModel extends Model
{
    public function getConnection()
    {
        // Определите подключение на основе запроса
        $request = app(Request::class);
        DatabaseGateway::switchConnection($request);

        return parent::getConnection();
    }
}
