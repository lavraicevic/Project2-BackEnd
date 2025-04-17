<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>


<div class="mt-10 w-4/5 min-h-screen px-2 mx-auto">
  
<h1 class="text-center text-3xl font-bold">Create post</h1>
  <form method="POST" action="/post" enctype="multipart/form-data">
    <div class="relative flex items-center mt-8">

      <input type="text" name="title" id="title" class="block w-full py-3 text-gray-700 bg-white border rounded-lg pl-2 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Title">

    </div>

    <label for="dropzone-file" class="flex items-center pl-3 py-3 mx-auto mt-6 text-center bg-white border-2 border-dashed rounded-lg cursor-pointer dark:border-gray-600 dark:bg-gray-900">

      <h2 class="text-gray-400">Add picture</h2>

        <input id="dropzone-file" name="picture" id="picture" type="file">
    </label>

    <div class="relative flex items-center mt-8">

      <input type="text" name="link" id="link" class="block w-full py-3 text-gray-700 bg-white border rounded-lg pl-2 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Add a video link">

    </div>

    
  <select name="category" id="category" class="mt-4 border-1 px-3 py-2 rounded-xl">

    <option value="" disabled selected class="text-gray-400">Choose option</option>

    <?php foreach($categories as $category) : ?>
      <option value="<?= $category['id']?>"><?= $category['name']?></option>
    <?php endforeach; ?>

  </select>
  <div class="relative flex items-center mt-4">

      <textarea rows="20" name="body" id="body" placeholder="Post description..."  class="block pl-2 pt-2 w-full text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"></textarea>

  </div>


  <div class="mt-6 flex items-center justify-start gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
  </form>
</div>
	
<?php require base_path("views/partials/footer.php") ?>