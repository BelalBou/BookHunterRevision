
<div class="flex flex-col md:flex-row bg-white p-6 rounded-lg shadow-md">
        <!-- author Cover -->
        <div class="md:w-1/3 mb-4 md:mb-0">
          <img
            src="https://picsum.photos/300/300"
            alt="author Cover"
            class="w-full h-auto rounded-lg shadow-lg"
          />
        </div>

        <!-- author Info -->
        <div class="md:w-2/3 md:pl-6">
            <h2><strong>Author:</strong>
            <?php echo $author['firstname'] ?>
            <?php echo $author['lastname'] ?></h2>
          <p class="text-gray-700 mb-4"><strong>bio:</strong> 
          <?php echo $author['biography'] ?></p>
          <a href="?authors" class="text-blue-600 hover:underline"
            >Back to authors</a
          >
        </div>
      </div>