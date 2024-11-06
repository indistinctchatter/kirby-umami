<?php

Kirby::plugin('indistinctchatter/umami', [
	'areas' => [
		'umami' => function ($kirby) {
			return [
				'label' => 'Analytics',
				'icon' => 'chart',
				'disabled' => false,
				'menu' => true,
				'link' => 'umami',
				'views' => [
					[
						'pattern' => 'umami',
						'action'  => function () use ($kirby) {
							return [
								'component' => 'k-umami-view',
								'title' => 'Analytics',
								'props' => [
									'sharedLink' => option('indistinctchatter.umami.sharedLink')
								],
							];
						}
					]
				]
			];
		}
	],
	'snippets' => [
		'umami' => __DIR__ . '/snippets/umami.php'
	]
]);
