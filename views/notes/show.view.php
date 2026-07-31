<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 dark:text-white">
    <p class="mb-6">
        <a href="/notes" class="text-blue-500 underline">Go back</a>
    </p>
    <p><?=  $note['body'] ?></p>

    <footer class="mt-6">
      <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-red-500 dark:shadow-none dark:focus-visible:outline-indigo-500">Update</a>
    </footer>
  </div>
</main>


<?php require base_path("views/partials/footer.php"); ?>