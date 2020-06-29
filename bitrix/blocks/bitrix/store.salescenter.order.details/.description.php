<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

$return = [
	'block' => [
		'name' => Loc::getMessage('LANDING_BLOCK_STORE_SALESCENTER_ORDER_DETAIL-NAME'),
		'section' => ['store'],
		'type' => 'null',
		'namespace' => 'bitrix'
	],
	'nodes' => [
		"bitrix:salescenter.order.details" => [
			'type' => 'component',
			'extra' => [
				'editable' => [
					// visual
					'TEMPLATE_MODE' => [
						'style' => true,
					],
				],
			],
		],
	],
	'style' => [
		'block' => [
			'type' => ['block-default', 'block-border'],
		],
		'nodes' => [],
	],
];


return $return;