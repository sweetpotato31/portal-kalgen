<?php

namespace App\Models;


class Apps
{
 private static $apps = [
    [
        "name"=>"E-Collection",
        "icon"=>"fa fa-3x fa-mail-bulk text-primary mb-4",
        "link"=>"http://e-collection.com:8100/login"
    ],
    [
        "name"=>"Orlansoft",
        "icon"=>"fa fa-3x fa-money-bill-trend-up text-primary mb-4",
        "link"=>"http://orlansoft.innolab.com:8080"
    ],
    [
        "name"=>"Transaction-Control",
        "icon"=>"fa fa-3x fa-money-check-dollar text-primary mb-4",
        "link"=>"http://orlansoft-control.com:8090/"
    ],
    [
        "name"=>"Absensi-Logistic",
        "icon"=>"fa fa-3x fa-tasks text-primary mb-4",
        "link"=>"http://10.125.64.211/internal-kalgen"
    ],
    [
        "name"=>"Help-Desk",
        "icon"=>"fa fa-3x fa-solid fa-ticket text-primary mb-4",
        "link"=>"https://helpdesk.innolab.com/"
    ],
    [
        "name"=>"Inno-Room",
        "icon"=>"fa fa-3x fa-sharp fa-solid fa-users text-primary mb-4",
        "link"=>"http://inno-room.com:8092/"
    ],
    [
        "name"=>"Inno-Box",
        "icon"=>"fa fa-3x fa-sharp fa-solid fa-box text-primary mb-4",
        "link"=>"https://innobox.innolab.com/"
    ]];

    public static function all(){
        return collect(self::$apps);
    }

    public static function find(){

    }
}
