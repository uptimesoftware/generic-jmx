


!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!!!    I M P O R T A N T    N O T E   !!!
============================================

Jolokia (http://www.jolokia.org) is required for this monitor.  The Jolokia war file is located in [up.time dir]/scripts/MonitorGenericJMX/jolokia-war-1.1.3.war.  This war file needs to be deployed onto your Application Server.  The monitor assumes jolokia is deployed to "jolokia-war-1.1.3" and as such, it expects the URL to access Jolokia as:

	http://[AppServer]:[Port]/jolokia-war-1.1.3

