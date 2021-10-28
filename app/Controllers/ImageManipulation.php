<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class ImageManipulation extends BaseController {

	public function image_fit() {
		$image = \Config\Services::image()
			->withFile(WRITEPATH . 'uploads/movies/1/1634955061_e23034ce7ce4a203e2a3.png')
			->fit(100, 100, 'center')
			->save(WRITEPATH . 'uploads/imagemanipulation/image_fit.png');
	}

	public function image_crop() {
		/*$info = \Config\Services::image('imagick')
				->withFile('/path/to/image/mypic.jpg')
				->getFile()
				->getProperties(true);

			$xOffset = ($info['width'] / 2) - 25;
		*/

		$xOffset = 100;
		$yOffset = 100;

		$image = \Config\Services::image()
			->withFile(WRITEPATH . 'uploads/movies/1/1634955061_e23034ce7ce4a203e2a3.png')
			->crop(50, 50, $xOffset, $yOffset)
			->save(WRITEPATH . 'uploads/imagemanipulation/image_crop.png');
	}

	public function image_quality() {
		$image = \Config\Services::image()
			->withFile(WRITEPATH . 'uploads/movies/1/1634955061_e23034ce7ce4a203e2a3.png')
		// processing methods
			->save(WRITEPATH . 'uploads/imagemanipulation/image_quality.png', 15);
	}

	public function image_rotate() {
		$image = \Config\Services::image()
			->withFile(WRITEPATH . 'uploads/movies/1/1634955061_e23034ce7ce4a203e2a3.png')
			->rotate(270)
			->save(WRITEPATH . 'uploads/imagemanipulation/image_rotate.png');
	}

	public function image_resize() {
		$image = \Config\Services::image()
			->withFile(WRITEPATH . 'uploads/movies/1/1634955061_e23034ce7ce4a203e2a3.png')
			->resize(100, 100, false)
			->save(WRITEPATH . 'uploads/imagemanipulation/image_resize.png');
	}

	public function image_multiple() {
		$image = \Config\Services::image()
			->withFile(WRITEPATH . 'uploads/movies/1/1634955061_e23034ce7ce4a203e2a3.png')
			->resize(200, 200, true)
			->rotate(90)
			->save(WRITEPATH . 'uploads/imagemanipulation/image_multiple.png');
	}
}