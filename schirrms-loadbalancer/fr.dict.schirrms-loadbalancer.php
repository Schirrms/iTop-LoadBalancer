<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2022 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:LoadBalancer' => 'LoadBalancer',
	'Class:LoadBalancer/Attribute:functionalcis_list' => 'CIs',
	'Class:LoadBalancer/Attribute:functionalcis_list+' => 'Tous les CIs qui composent cette configuration de Load Balancer',
	'Class:LoadBalancer/Attribute:status' => 'État',
	'Class:Certificate/Attribute:status/Value:active' => 'actif',
	'Class:Certificate/Attribute:status/Value:inactive' => 'inactif',
	'Class:LoadBalancer/Attribute:redundancy' => 'Analyse d\'impact : configuration de la redondance',
	'Class:LoadBalancer/Attribute:redundancy/disabled' => 'La solution est opérationelle si tous les CIs qui la composent sont opérationnels',
	'Class:LoadBalancer/Attribute:redundancy/count' => 'Nombre minimal de CIs pour que la solution soit opérationnelle : %1$s',
	'Class:LoadBalancer/Attribute:redundancy/percent' => 'Pourcentage minimal de CIs pour que la solution soit opérationnelle : %1$s %%',
	'Class:LoadBalancer/Attribute:lbtype' => 'Type de Load Balancer',
	'Class:LoadBalancer/Attribute:lbtype/Value:cluster' => 'Cluster constituant le Load Balancer',
	'Class:LoadBalancer/Attribute:lbtype/Value:vip' => 'IP virtuelle (vip) (ou serveur virtuel)',
	'Class:LoadBalancer/Attribute:lbtype/Value:servicegroup' => 'Groupe de service',
	'Class:LoadBalancer/Attribute:ipaddress_id' => 'Adresse IP',
	'Class:LoadBalancer/Attribute:partition' => 'Partition au sein du Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer' => 'Lien CIs Functionels / Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:functionalci_id' => 'CI',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:proto' => 'Protocole',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:proto+' => 'Protocole utilisé, probablement tcp ou udp pour un LB de niveau 4, or peut-être http / https / ... pour un LB de niveau 7',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:port' => 'Port',
	'Class:FunctionalCI/Attribute:loadbalancer_list' => 'Load Balancer(s)'
));
?>