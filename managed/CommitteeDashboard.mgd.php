<?php
return [
	[
		'name' => 'SavedSearch_Committee_Listing',
		'entity' => 'SavedSearch',
		'cleanup' => 'always',
		'update' => 'unmodified',
		'params' => [
			'version' => 4,
			'values' => [
				'name' => 'CommitteeListing',
				'label' => 'Listing',
				'form_values' => NULL,
				'mapping_id' => NULL,
				'search_custom_id' => NULL,
				'api_entity' => 'Committee',
				'api_params' => [
					'version' => 4,
					'select' => [
						'id',
						'name',
						'summary',
						'activities',
						'is_active',
					],
					'orderBy' => [],
					'where' => [],
					'groupBy' => [],
					'join' => [],
					'having' => [],
				],
				'expires_date' => NULL,
				'description' => NULL,
			],
		],
	],
	[
		'name' => 'SavedSearch_Committee_Listing_SearchDisplay_Committee_Listing',
		'entity' => 'SearchDisplay',
		'cleanup' => 'always',
		'update' => 'unmodified',
		'params' => [
			'version' => 4,
			'values' => [
				'name' => 'Committee_Listing',
				'label' => 'Committee Listing',
				'saved_search_id.name' => 'CommitteeListing',
				'type' => 'table',
				'settings' => [
					'description' => NULL,
					'sort' => [],
					'limit' => 50,
					'pager' => [],
					'placeholder' => 5,
					'columns' => [
						[
							'type' => 'field',
							'key' => 'id',
							'dataType' => 'Integer',
							'label' => 'ID',
							'sortable' => TRUE,
						],
						[
							'type' => 'field',
							'key' => 'name',
							'dataType' => 'String',
							'label' => 'Title',
							'sortable' => TRUE,
						],
						[
							'type' => 'field',
							'key' => 'is_active',
							'dataType' => 'Boolean',
							'label' => 'Committee Is Active',
							'sortable' => TRUE,
						],
						[
							'size' => 'btn-xs',
							'links' => [
								[
									'path' => 'civicrm/committee/manage#?Committee=[id]',
									'icon' => '',
									'text' => 'Edit',
									'style' => 'default',
									'condition' => [],
									'entity' => '',
									'action' => '',
									'join' => '',
									'target' => 'crm-popup',
								],
								[
									'path' => 'civicrm/committee/manage#?Committee=[id]&action=delete',
									'icon' => '',
									'text' => 'Delete',
									'style' => 'danger',
									'condition' => [],
									'entity' => '',
									'action' => '',
									'join' => '',
									'target' => 'crm-popup',
								],
							],
							'type' => 'buttons',
							'alignment' => 'text-right',
						],
					],
					'actions' => TRUE,
					'classes' => [
						'table',
						'table-striped',
					],
				],
				'acl_bypass' => FALSE,
			],
		],
	],
];
