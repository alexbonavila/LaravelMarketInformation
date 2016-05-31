<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 31/05/16
 * Time: 15:44
 */

namespace App\Console\AuxiliaryClasses;


/**
 * Class ProgressControl
 * @package App\Console\AuxiliaryClasses
 */
class ProgressControl
{

    /**
     * @param $i
     */
    public function progressControl($i)
    {
        switch($i){
            case 0:
                echo "0%\n";
                break;
            case 24:
                echo "25%\n";
                break;
            case 49:
                echo "50%\n";
                break;
            case 74:
                echo "75%\n";
        }
    }


}