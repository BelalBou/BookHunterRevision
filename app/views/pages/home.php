<h2 class="text-xl font-semibold mb-4">Latest Books</h2>
<ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
<!-- Book 1 -->
<?php foreach ($books as $book): ?>
    <li
        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow"
    >
        <a href="book-details.html?id=1" class="block">
        <h3 class="text-lg font-bold mb-2">Book <?php echo $book['title']; ?></h3>
        <div class="md:w-1/3 mb-4 md:mb-0">
          <img
            src="<?php echo $book['cover']; ?>"
            alt="Book Cover"
            class="w-full h-auto rounded-lg shadow-lg"
          />
        </div>
        <p class="text-gray-700"><?php echo \Core\Helpers\truncate($book['resume']); ?>
        <p class="text-gray-700">Published: <?php echo $book['publicated_at']; ?></p>
        </a>
    </li>
<?php endforeach;?>
</ul>

<h2 class="text-xl font-semibold mb-4">Latest Authors</h2>
<ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
<!-- Book 1 -->
<?php foreach ($authors as $author): ?>
    <li
        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow"
    >
        <a href="book-details.html?id=1" class="block">
        <h3 class="text-lg font-bold mb-2">Author <?php echo $author['firstname']; ?></h3>
        <div class="md:w-1/3 mb-4 md:mb-0">
          <img
            src="<?php echo $author['picture']; ?>"
            alt="author picture"
            class="w-full h-auto rounded-lg shadow-lg"
          />
        </div>
        <p class="text-gray-700">bio: <?php echo $author['biography']; ?></p>
        <p class="text-gray-700">Published: <?php echo $author['created_at']; ?></p>
        </a>
    </li>
<?php endforeach;?>
</ul>
