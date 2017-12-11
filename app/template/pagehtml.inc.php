<!DOCTYPE html>

<html>

	<head>


		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1">
		<title><?= $subject->title ?></title>
		
		
<?php foreach ($subject->link as $link): ?>
		<link rel="stylesheet" href="<?= $link ?>"/>

<?php endforeach; ?>

    <script id="title-template" type="text/template">
       <a href="#qux" data-role="button" data-icon="bars" class="ui-link ui-btn-left ui-btn ui-icon-bars ui-btn-icon-left ui-shadow ui-corner-all">menu</a>
            <h1 class="ui-title" role="heading" aria-level="1"><%= title %></h1>
        <a href="#js" data-role="button" data-icon="forward" class="ui-link ui-btn-right ui-btn ui-icon-forward ui-btn-icon-left ui-shadow ui-corner-all">js</a>
    </script>
    
    <script id="footer-template" type="text/template">

            <h6 class="ui-title" role="heading" aria-level="1"><%= footer %></h6>

	</script>

<?php foreach ($subject->script as $script): ?>
		<script type="text/javascript" src="<?= $script ?>"></script>
		
<?php endforeach; ?>


	</head>
	<body>
	
	 <div data-role="panel"
         id="qux"
         data-theme="c"
         data-display="overlaw"
         >
<!--         boucle -->
<?php foreach ($subject->page as $page ): ?>

        <a data-role="button" class="ui-btn ui-btn-a" id="<?= $page ?>"><?= ucfirst($page) ?></a>
        
<?php endforeach; ?>        
<!--    fin boucle -->
            
    </div>	

	
<?php foreach ($subject->page as $page): ?>

    <div data-role="page" id="<?= strtolower($page) ?>" >
        <div data-role="header" data-theme="b"></div>
        <div data-role="main" class="ui-content"></div>
        <div data-role="footer" data-position="fixed"></div>
    </div>
		
<?php endforeach; ?>
	
	</body>
	
</html>