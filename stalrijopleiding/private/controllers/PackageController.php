<?php

/**
 * Class PackageController
 *
 */
class PackageController {

	function overview(){
 
		// Haal alle pakketten op uit de "model" laag.
		$packages = getPackages();


		$template_engine = get_template_engine();

		echo $template_engine->render('pakketten', [
			'pakketten' => $packages
		]);

	}

}