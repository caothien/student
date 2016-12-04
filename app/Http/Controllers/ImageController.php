<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Excel;

class ImageController extends Controller
{
	public function blurImage() {
		// jped = (jpg, jpeg)
		$im = imagecreatefromjpeg('images/hoa.jpg');
		for ($i = 0; $i < 30; ++$i) {
			imagefilter($im, IMG_FILTER_GAUSSIAN_BLUR);
		}
		imagepng($im, 'images/hoalai.png');
		imagedestroy($im);
		echo 'blur image success !';
	}
}
