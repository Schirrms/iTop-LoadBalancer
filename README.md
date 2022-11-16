# iTop-LoadBalancer
Add some LoadBalancer Classes to iTop

This classes are highly inspired by the original 'ApplicationSolution' class. the idea is to have a versatile product, able to connect to virtually any Functional CI, as does the ApplicationSolution class, but with some 'technical informations' available, mainly the IP address, not availavble in 'ApplicationSolution' and missing for our use

## Further notes :

<ol>
	<li>As we use TeemIP, this extension will have dependencies to TeemIP. It should not be a big work to remove this dependencies, but I don't have time to test it !</li>
	<li>Our load balancers are A10 from A10network. So, while I wish to create an agnostic extension, it is possible that this extension will be 'tainted' with A10 terminology.</li>
</ol>
