<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    	<?php foreach($posts as $post): ?>
			<li>
				<a href="/post?id=<?= $post['id'] ?>" class="text-blue-500 underline">
					<?= htmlspecialchars($post['title']) ?>
				</a>
			</li>
		<?php endforeach; ?>


		<a href="/post/create" class="block mt-10 px-4 py-1 rounded-lg w-fit text-white bg-green-500 hover:underline">Create new</a>
    </div>
  </main>

<?php require base_path("views/partials/footer.php") ?>