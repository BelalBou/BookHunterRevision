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
            src="https://picsum.photos/300/300"
            alt="Book Cover"
            class="w-full h-auto rounded-lg shadow-lg"
          />
        </div>
        <p class="text-gray-700"><?php echo \Core\Helpers\truncate($book['resume']); ?>
        <p class="text-gray-700">Published: <?php echo $book['publicated_at']; ?></p>
        <p class="text-gray-700">Author: 
        <?php echo $book['firstname']; ?>, 
        <?php echo $book['lastname']; ?></p>
        </a>
    </li>
<?php endforeach;?>
</ul>