<?php

return [
	"bundle.attachment" => [
		"path.@path"                => "var/dataStore/attachments",
		"url"                       => "/~fs",
		"restricted-access-postfix" => ".restricted-access",
		"img"                       => [
			"jpeg-quality" => 80,
			"url"          => "/~img",
			"path.@path"   => "var/tmp/img/",
			"creator"      => \Atomino\Bundle\Attachment\Img\ImgCreatorGD2::class,
			"secret"       => "",
		],
	],
];