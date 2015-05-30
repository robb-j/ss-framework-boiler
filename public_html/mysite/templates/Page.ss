<!doctype html>
<head>
	
	<!-- Page Info -->
	<title> $SiteConfig.Title </title>
	<% base_tag %>
	<meta name="viewport" content="width=device-width"/>
	
	
	<!-- Icon Files, sizes: https://github.com/audreyr/favicon-cheat-sheet/ & tool: http://converticon.com/ -->
	<link rel="shortcut icon" href="{$BaseURL}favicon.ico"/>
	<link rel="apple-touch-icon-precomposed" href="{$BaseURL}favicon-152.png">
	
	
	<!-- CSS -->
	<% require css("mysite/css/screen.css") %>
	
</head>
<body>
	<input id="production-mode" type="hidden" value="$SiteConfig.ProductionMode"/>	
	<div class="page-container">
		
		<% if Form %>
			
			$Content
			<hr/>
			<% include AdminLogin Form=$Form, Title=$SiteConfig.Title %>
			
		<% else %>
		
			$PageContent
			
		<% end_if %>
		
	</div>
</body>
</html>
