<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Tabs - Default functionality</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>


</head>
<body>

		
			<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>


</body>

</html>