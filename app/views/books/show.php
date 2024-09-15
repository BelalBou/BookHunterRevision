
<div class="flex flex-col md:flex-row bg-white p-6 rounded-lg shadow-md">
        <!-- Book Cover -->
        <div class="md:w-1/3 mb-4 md:mb-0">
          <img
            src="https://picsum.photos/300/300"
            alt="Book Cover"
            class="w-full h-auto rounded-lg shadow-lg"
          />
        </div>

        <!-- Book Info -->
        <div class="md:w-2/3 md:pl-6">
          <h2 class="text-2xl font-bold mb-4">Book Title <?php echo $book['title'] ?></h2>
          <p class="text-gray-700 mb-4"><strong>Published:</strong> 
          <?php echo $book['publicated_at'] ?></p>
          <p class="text-gray-700 mb-4"><strong>Author:</strong> 
          <?php echo $book['firstname'] ?>
          <?php echo $book['lastname'] ?></p>

          <h3 class="text-xl font-semibold mb-2">Summary</h3>
          <p class="text-gray-700 mb-4">
          <?php echo $book['resume'] ?>
          </p>

          <a href="?books" class="text-blue-600 hover:underline"
            >Back to Catalog</a
          >
        </div>
      </div>