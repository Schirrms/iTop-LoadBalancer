<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2022 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer/Attribute:functionalcis_list' => 'CIs',
	'Class:LoadBalancer/Attribute:functionalcis_list+' => 'All the configuration items that compose this Load Balancer configuration',
	'Class:LoadBalancer/Attribute:status' => 'Status',
	'Class:Certificate/Attribute:status/Value:active' => 'active',
	'Class:Certificate/Attribute:status/Value:inactive' => 'inactive',
	'Class:LoadBalancer/Attribute:redundancy' => 'Impact analysis: configuration of the redundancy',
	'Class:LoadBalancer/Attribute:redundancy/disabled' => 'The solution is up if all CIs are up',
	'Class:LoadBalancer/Attribute:redundancy/count' => 'The solution is up if at least %1$s CI(s) is(are) up',
	'Class:LoadBalancer/Attribute:redundancy/percent' => 'The solution is up if at least %1$s %% of the CIs are up',
	'Class:LoadBalancer/Attribute:lbtype' => 'Load Balancer Type',
	'Class:LoadBalancer/Attribute:lbtype/Value:cluster' => 'Load Balancer Cluster',
	'Class:LoadBalancer/Attribute:lbtype/Value:vip' => 'Virtual IP (or Virtual Server)',
	'Class:LoadBalancer/Attribute:lbtype/Value:servicegroup' => 'Service Group',
	'Class:LoadBalancer/Attribute:ipaddress_id' => 'IP Address',
	'Class:LoadBalancer/Attribute:partition' => 'Partition in the Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer' => 'Link Functional CIs / Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:functionalci_id' => 'CI',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:proto' => 'Protocol',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:proto+' => 'Protocol used, probably tcp or udp if running a Layer 4 LB, or maybe http / https / ... if running a Layer 7 LB',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:port' => 'Port',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc' => 'SSL initiator',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc+' => 'Is the connection to the backend SSL protected ?',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc/Value:yes' => 'Yes',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc/Value:no' => 'No',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend' => 'SSL termination',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend+' => 'Does the load balancer terminate the SSL connection ?',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend/Value:yes' => 'Yes',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend/Value:no' => 'No',
	'Class:FunctionalCI/Attribute:loadbalancer_list' => 'Load Balancer(s)'
));
?>
