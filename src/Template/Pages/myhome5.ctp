<?php
if (isset($_GET['s']))
{
	require_once( dirname(_FILE_). '/classes/class-search.php');
	$search = new search();
	$search_term = $_GET['s'];
	$search_result = $search ->search($search_term)
}
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<h1>Search></h1>
		<div class="search-form">
			<form action=""	method="get">
				<div class="form-field">
					<label for = "search_field">Search</label>
					<input type="Search" name="s" placeholder="Enter" results="s" value="<?php echo $search_term; ?>">
					<input type="submit" value="Search">
				</div>
			</form>
		</div>
		<?php if ($search_result) : ?>
		
			<div class="results-table">
			<?php foreach ($search_result['results'] as $search_result) 
			<div class="results">
				<p><?php echo $search_result->title; ?></p>
				</div>
				<?php endforeach; ?>
				</div>
					<div class="search-raw">
						<pre><?php print_r($search_result); ?></pre>
				</div>
			<?php endif; ?>
			</body>
	</html>
