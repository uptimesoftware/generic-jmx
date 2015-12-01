# Generic JMX

See http://uptimesoftware.github.io for more information.

### Tags 
 plugin   jmx   mbeans   networking  

### Category

plugin

### Version Compatibility

* Generic JMX 2.01 - 7.3,7.4,7.5,7.6
  
* Generic JMX 1.0 - 7.2
  


### Description
This monitor enables users to define monitoring for any JMX MBeans.


### Supported Monitoring Stations

7.3,7.4,7.5,7.6,7.2

### Supported Agents
None; no agent required

### Installation Notes
<p><a href="https://github.com/uptimesoftware/uptime-plugin-manager">Install using the up.time Plugin Manager</a></p>

<p><a href="http://jolokia.org">Jolokia</a> is required for this monitor. The Jolokia war file is located in [up.time dir]/scripts/MonitorGenericJMX/jolokia-war-1.1.3.war. This war file needs to be deployed onto your Application Server. The monitor assumes jolokia is deployed to "jolokia-war-1.1.3" and as such, it expects the URL to access Jolokia as:</p>

<p>http://[AppServer]:[Port]/jolokia-war-1.1.3</p>


### Dependencies
<p>Jolokia</p>


### Input Variables

* MBean Object Name

* Attribute


### Output Variables


* Values


### Languages Used

* PHP

