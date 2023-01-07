<?php

namespace App\Http\Controllers;

use Facades\Label84\HoursHelper\HoursHelper;

class TimesController extends Controller
{
    public function show() 
    {
        echo '1. 差距分鐘：' . ($interval = 30) . '，' . '開始時間：' . ($startTime = '08:00') . '，' . '結束時間：' . ($endTime = '09:30') . PHP_EOL;
        $hours = HoursHelper::create($startTime, $endTime, $interval);
        foreach ($hours as $hour) {
            echo $hour . PHP_EOL;
        }
        echo '2. 日期格式：' . ($format = 'g:i A') . '差距分鐘：' . ($interval = 60) . '，' . '開始時間：' . ($startTime = '11:00') . '，' . '結束時間：' . ($endTime = '13:00') . PHP_EOL;
        $hours = HoursHelper::create($startTime, $endTime, $interval, $format);
        foreach ($hours as $hour) {
            echo $hour . PHP_EOL;
        }
        echo '3. 日期格式：' . ($format = 'H:i') . '差距分鐘：' . ($interval = 60) . '，' . '開始時間：' . ($startTime = '08:00') . '，' . '結束時間：' . ($endTime = '10:00') . '，' . '排除時間：' . (json_encode($excludeAry = [
            ['09:00', '09:59'],
        ])) . PHP_EOL;
        $hours = HoursHelper::create($startTime, $endTime, $interval, $format, $excludeAry);
        foreach ($hours as $hour) {
            echo $hour . PHP_EOL;
        }
    }
}
