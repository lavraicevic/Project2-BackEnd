<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") 
?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    	<?php foreach($posts as $post): ?>
			<li>
				<a href="/post?id=<?= $post['id'] ?>" class="text-blue-500 underline">
					<div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
						<img class="object-cover w-full h-64" src="/assets/<?= $post['picture']?>" alt="Article">

						<div class="p-6">
							<div>
								<a href="#" class="block mt-2 text-xl font-semibold text-gray-800 transition-colors duration-300 transform dark:text-white hover:text-gray-600 hover:underline" tabindex="0" role="link"><?= htmlspecialchars($post['title']) ?></a>
								<p class="mt-2 text-sm text-gray-600 dark:text-gray-400"><?= htmlspecialchars($post['body']) ?></p>
							</div>
					
							<div class="mt-4">
								<div class="flex items-center">
									<div class="flex items-center">
										<img class="object-cover h-10 rounded-full" src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60" alt="Avatar">
										<span class="mx-2 font-semibold text-gray-700 dark:text-gray-200" tabindex="0" role="link">Jone Doe</span>
									</div>
									<span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</li>
		<?php endforeach; ?>


		<a href="/post/create" class="block mt-10 px-4 py-1 rounded-lg w-fit text-white bg-green-500 hover:underline">Create new</a>
    </div>
  </main>

<?php require base_path("views/partials/footer.php") ?>