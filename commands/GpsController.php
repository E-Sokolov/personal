<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Gps;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class GpsController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }
    public function actionParseKmzFile()
    {
        $data = file_get_contents("/mnt/nextcloud/ssh.kmz"); // get kmz file
        file_put_contents("/tmp/kmz_temp", $data); // put content to temp dir
        // unzip kmz
        ob_start();
        passthru('unzip -p /tmp/kmz_temp');
        $xmlData = ob_get_clean();
        $dom = new \domDocument('1.0', 'utf-8');
        $dom->loadXML($xmlData);
        $node= $dom->getElementsByTagName('coordinates');
        $coords = $node->item(0)->nodeValue;

        $geo = explode(',',$coords);
        $gps = new Gps();
        $gps->lat = $geo[0];
        $gps->lng = $geo[1];
        $gps->hgt = $geo[2];

        $save = $gps->save();
        if($gps -> errors)
        {
            var_dump($gps->errors);
            return ExitCode::DATAERR;
        }else{
            return ExitCode::OK;
        }

    }
}
