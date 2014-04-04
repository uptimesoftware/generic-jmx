<?php
	//error_reporting(E_ERROR | E_WARNING);
	error_reporting(E_ERROR);
	
	$JOLOKIA_PATH="jolokia-war-1.1.3";
	
	$JMX_HOST = getenv('UPTIME_HOSTNAME');
	$JMX_PORT = getenv('UPTIME_WEBPORT');
	$JMX_MBEAN = getenv('UPTIME_JMXMBEAN');
	$JMX_ATTRIBUTE = getenv('UPTIME_JMXATTRIBUTE');
	$JMX_DATA_TYPE = getenv('UPTIME_OUTPUTTYPE');
	
	
	$JMX_MBEAN_ESCAPED = str_replace("/", "!/",$JMX_MBEAN);
	$JMX_MBEAN_ESCAPED = str_replace(" ", "%20",$JMX_MBEAN_ESCAPED);
	//echo "http://".$JMX_HOST.":".$JMX_PORT."/jolokia-war-1.1.3?p=/read/".$JMX_MBEAN_ESCAPED."/".$JMX_ATTRIBUTE."\n";
	
	$JSON_DATA = json_decode(file_get_contents("http://".$JMX_HOST.":".$JMX_PORT."/".$JOLOKIA_PATH."?p=/read/".$JMX_MBEAN_ESCAPED."/".$JMX_ATTRIBUTE));

	
	if ($JSON_DATA->{'status'} != "200") {
		echo "Cannot get data.  Error code:". $JSON_DATA->{'status'}."\n";
		$stackTrace = str_replace("\n", "",$JSON_DATA->{'stacktrace'});
		echo "Stacktrace:". $stackTrace."\n";
		
		exit (2);
	}
	
	
	if(is_int($JSON_DATA->{'value'})) {
		echo "returnedDataNum ".$JSON_DATA->{'value'}."\n";
	} else {
		echo "returnedDataString ".$JSON_DATA->{'value'}."\n";
	}
	


?>
