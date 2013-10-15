# Generic JMX
## Tags : plugin   jmx   mbeans   networking  

## Category: plugin

##Version Compatibility<br/>Module Name</th><th>up.time Monitoring Station Version</th>


  
    * Generic JMX 1.0 - 7.2
  


### Description: This monitor enables users to define monitoring for any JMX MBeans.

### Supported Monitoring Stations: 7.2
### Supported Agents: None; no agent required
### Installation Notes: <p><a href="https://github.com/uptimesoftware/uptime-plugin-manager">Install using the up.time Plugin Manager</a></p>

<p><a href="http://jolokia.org">Jolokia</a> is required for this monitor. The Jolokia war file is located in [up.time dir]/scripts/MonitorGenericJMX/jolokia-war-1.1.3.war. This war file needs to be deployed onto your Application Server. The monitor assumes jolokia is deployed to "jolokia-war-1.1.3" and as such, it expects the URL to access Jolokia as:</p>

<p>http://[AppServer]:[Port]/jolokia-war-1.1.3</p>

### Dependencies: <p>Jolokia</p>

### Input Variables: * MBean Object Name* Attribute
### Output Variables: * Values
### Languages Used: * PHP

