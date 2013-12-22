<?php
return array(
	// application components
	'components' => array(
		'ePdf' => array(
			'class' => 'ext.ePdf.EYiiPdf',
			'params' => array(
				'mpdf' => array(
					'librarySourcePath' => 'ext.ePdf.vendors.mpdf.*',
					'constants' => array(
						'_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
					),
					'class' => 'mpdf', // the literal class filename to be loaded from the vendors folder
					'defaultParams' => array( // More info: http://mpdf1.com/manual/index.php?tid=184
						// 'mode' => '+aCJK', //  This parameter specifies the mode of the new document.
						// 'format' => 'A4', // format A4, A5, ...
						// 'default_font_size' => '', // Sets the default document font size in points (pt)
						// 'default_font' => '', // Sets the default font-family for the new document.
						// 'mgl'               => 15, // margin_left. Sets the page margins for the new document.
						// 'mgr'               => 15, // margin_right
						// 'mgt'               => 16, // margin_top
						// 'mgb'               => 16, // margin_bottom
						// 'mgh'               => 9, // margin_header
						// 'mgf'               => 9, // margin_footer
						// 'orientation'       => 'P', // landscape or portrait orientation
					)
				),
			),
		),
	),
);