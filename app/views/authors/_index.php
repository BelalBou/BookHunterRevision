<ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
<!-- author 1 -->
<?php foreach ($authors as $author): ?>
    <li
        class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow"
    >
        <a href="?authors=show&id=<?php echo $author['id']; ?>" class="block">
        <h3 class="text-lg font-bold mb-2">Author <?php echo $author['firstname']; ?></h3>
        <div class="md:w-1/3 mb-4 md:mb-0">
          <img
            src="https://picsum.photos/300/300"
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