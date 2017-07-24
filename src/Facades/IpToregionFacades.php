<?php
namespace Alezh\laravelIp2region\Facades;
use Illuminate\Support\Facades\Facade;
class IpToregionFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ip2region';
    }
}
