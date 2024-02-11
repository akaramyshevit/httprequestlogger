# HTTPREQUESTLOGGER

Simple php library for logging incoming HTTP requests.

## Basic Usage:

- Put `httprequestlogger.php` file in your project directory root and include library in your project

> /myproject/var/www/index.php

```php
<?php
include __DIR__. 'httprequestlogger.php';
logHttpIncomingRequestLog();
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Project</title>
	</head>
	<body>
		<div id="wrapper">
		<h2>Project Header:</h2>
		<br>
		<div class="content-main">
			<div>
				Some Content...
			</div>
		</div>
		</div>
	</body>
</html>
```

- Call **logHttpIncomingRequestLog()** ( set **debug** to true, for verbose output ).
