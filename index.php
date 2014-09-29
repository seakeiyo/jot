<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jot</title>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/pace/0.5.7/pace.js"></script>
	<link rel="stylesheet" href="css/pace-theme-flat-top.css">
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">	
	
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap_grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap_visible.css">
</head>

<body>	
	<div id="title" class="text-center mt-20 mb-20"-->
		<h1>Jot</h1>
	</div>
	
	<div id="main" class="text-center">
		<div class="container">
			<div class="row">
				<?php
				$db = new SQLite3('db/jot');

				$selectString = 'SELECT id, title, content FROM note';

				$result = $db->query($selectString);

				while($row = $result->fetchArray(SQLITE3_ASSOC)){
				?>
					<div class="col-md-6">				
					<input id="title-<?=$row['id']?>" class="title-text box bind-evt bind-evt-title" data-id="<?=$row['id']?>" type="text" placeholder="Title" value="<?=$row['title']?>">
					<textarea id="note-<?=$row['id']?>" class="note box bind-evt bind-evt-note" data-id="<?=$row['id']?>"><?=$row['content']?></textarea>		
				</div>
				<?php
				}
				?>
			</div>
		</div>		
	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>