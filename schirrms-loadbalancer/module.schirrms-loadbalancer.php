<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'schirrms-loadbalancer/0.0.2',
	array(
		// Identification
		//
		'label' => 'Add Load Balancers to iTop',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'teemip-config-mgmt-adaptor/2.7.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'vendor/autoload.php',
			'model.schirrms-loadbalancer.php', // Contains the PHP code generated by the "compilation" of datamodel.schirrms-loadbalancer.xml
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
