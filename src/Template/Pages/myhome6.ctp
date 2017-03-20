<?php

if(isset($_GET['s'])){
	
	require_once(dirname(__FILE__) . '/classes/class-search.php');

	$search = new search();

	$search_term = $_GET['s'];

	$search_results = $search->search($search_term);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<h1>Search</h1>
		<div class = "search_form">
			<form action ="" method = "get">
				<div class = "form-field">
					<label for= "search-field">Search</label>
					<input type= "search" name="s" placeholder="Enter your search term..." results="5" value="<?php echo $search_term; ?>">
					<input type="submit" value="Search">
				</div>
			</form>
		</div>
		<?php if($search_results : ?>
		<div class="results-count">
			<p><?php echo $search_results['count']; ?> results found</p>
		</div>
		<div class="results-table">
			<?php foreach($search_results['results'] as $search_result) : ?>
			<div class="result">
				<p><?php echo $search_result->title; ?></p>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="search-raw">
			<pre><?php print_r($search_results); ?></pre>
		</div>
		<?php endif; ?>
	</body>
</html>
