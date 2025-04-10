<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<div class="container mx-auto">
<form method="POST" action="/note">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
    
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-2">
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input type="text" 
              name="title" 
              id="username"
              value="<?= $_POST['title'] ?? '' ?>"
              class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
            </div>
              <?php if(isset($errors['title'])): ?>
                <p class="text-red-500 text-sm"><?= $errors['title'] ?></p>
              <?php endif; ?>
          </div>
        </div>

        <div class="col-span-full">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input type="text" 
                  name="body" 
                  id="body"
                  value="<?= $_POST['body'] ?? '' ?>"
                  class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
            </div>

            <?php if(isset($errors['body'])): ?>
              <p class="text-red-500 text-sm"><?= $errors['body'] ?></p>
            <?php endif; ?>
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-start gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</div>
	
<?php require base_path("views/partials/footer.php") ?>