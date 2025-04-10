<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
	
	<main>
		<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
			<div class="sm:mx-auto sm:w-full sm:max-w-sm">
				<img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
				<h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register here!</h2>
			</div>
			
			<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
				<form class="space-y-6" action="/register" method="POST">
					<div>
						<label for="name" class="block text-sm/6 font-medium text-gray-900">Full name</label>
						<div class="mt-2">
							<input type="text" name="name" id="name" autocomplete="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
						</div>
						<?php if(isset($errors['name'])): ?>
							<p class="text-red-500 text-sm"><?= $errors['name'] ?></p>
						<?php endif; ?>
					</div>
					<div>
						<label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
						<div class="mt-2">
							<input type="text" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
						</div>
						<?php if(isset($errors['email'])): ?>
							<p class="text-red-500 text-sm"><?= $errors['email'] ?></p>
						<?php endif; ?>
					</div>
					
					<div>
						<div class="flex items-center justify-between">
							<label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
						</div>
						<div class="mt-2">
							<input type="password" name="password" id="password" autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
						</div>
						<?php if(isset($errors['password'])): ?>
							<p class="text-red-500 text-sm"><?= $errors['password'] ?></p>
						<?php endif; ?>
					</div>
					
					<div>
						<button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
					</div>
				</form>
				
				<p class="mt-10 text-center text-sm/6 text-gray-500">
					Already have an account?
					<a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Login here</a>
				</p>
			</div>
		</div>
	
	</main>

<?php require base_path("views/partials/footer.php") ?>