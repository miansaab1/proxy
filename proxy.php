<?php
// Proxy script to fetch XML content from a URL

// URL of the XML file to fetch (make sure to validate and sanitize this URL to prevent security issues)
$xmlFileUrl = $_GET['url'];

// Fetch XML content
$xmlContent = file_get_contents($xmlFileUrl);

// Output XML content with appropriate headers
header('Content-Type: text/xml');
echo $xmlContent;
?>
