<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>
	
	<main>
		<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
			<h1 class="text-2xl font-semibold"><?= htmlspecialchars($post['title']) ?></h1>
			
			<p>
				<?= htmlspecialchars($post['body']) ?>
			</p>
			
			<div class="mt-6">
				<a href="/post/edit?id=<?= $post['id'] ?>"
				class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
			</div>
		</div>
	</main>

<?php require base_path("views/partials/footer.php") ?>