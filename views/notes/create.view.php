<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php require "views/partials/banner.php"; ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 dark:text-white">
        <form method="POST">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">

                    <div class="col-span-full">
                        <label for="about" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Body</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" placeholder="Here' an idea for a note"><?= $_POST['body'] ?? '' ?></textarea>
                        </div>

                        <?php if (isset($errors['body'])) : ?>
                            <p class="mt-3 text-sm/6 text-red-600 dark:text-red-400"><?= $errors['body'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:focus-visible:outline-indigo-500">Save</button>
                    </div>

                </div>
            </div>
        </form>

    </div>
</main>


<?php require "views/partials/footer.php"; ?>