<?php

/**
 * Class DriveController
 *
 */
class DriveController {

	function overview(){

		// Haal alle Opleidingen op uit de "model" laag.
		$drive = getDrive();


		$template_engine = get_template_engine();

		echo $template_engine->render('drive', [
			'drive' => $drive
		]);

	}

}