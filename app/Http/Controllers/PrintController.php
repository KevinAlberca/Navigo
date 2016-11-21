<?php
/**
 * Created by PhpStorm.
 * User: awh
 * Date: 21/11/2016
 * Time: 11:22
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PrintController extends Controller
{
    protected function getNavigoCard() {
        $pp = $this->_getProfilePicture();
        if(file_exists('uploads/profile_picture/'.$pp)) {
            return $this->_printNavigoCard('uploads/profile_picture/'.$pp);
        } else {
            echo 'File does not exists';
        }
        return true;
    }

    private function _getProfilePicture() {
        $full_name = strtolower(Auth::user()->firstname.".".Auth::user()->lastname);
        $scan = scandir('uploads/profile_picture');
        $file_name;
        foreach ($scan as $pp) {
            if($pp == $full_name.".png") {
                $file_name = $full_name.".png";
            } elseif($pp == $full_name.".jpg") {
                $file_name = $full_name.".jpg";
            } else {
                $file_name = false;
            }
        }
        return $file_name;
    }

    public function _printNavigoCard($file_path) {
        header ("Content-type: image/png"); // L'image que l'on va créer est un jpeg

        $navigo_card = imagecreatefrompng('img/navigo.png'); // Le logo est la source
        $profile_picture = imagecreatefrompng($file_path);  // La photo est la destination
        $navigo_card_infos = getimagesize('img/navigo.png');

        $dst_x = $navigo_card_infos[0] - 255;
        $dst_y = $navigo_card_infos[1] - 180;

        imagecopyresized($navigo_card, $profile_picture, $dst_x, $dst_y, 0, 0, 167, 167, 300, 300);

        imagepng($navigo_card);

        return imagedestroy($navigo_card);

    }
}