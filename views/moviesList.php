<form method="POST" action="show" class="flex items-center mt-12">
    <div class="m-auto w-11/12 sm:w-11/12 lg:w-11/12 backdrop-blur-sm  ">
        <div class="w-full flex justify-center space-x-4 items-center p-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <?php
        foreach ($_POST['movies'] as $movie) {
            echo '
                 <div class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50">
                     <div class="flex w-full justify-end">
                          <a href="/mvcTest/MovieController/consult/'.$movie['id'].'" class=" text-black text-center hover:bg-slate-200 border hover:border-2 w-14 h-14 rounded-full py-4 transition duration-300 "><span class="material-symbols-outlined">search</span></a>
                     </div>
                      <h2 class="text-xl text-black font-semibold mb-4">' . $movie['title'] . '</h2>
                      <p class="text-gray-700">' . $movie['year_release'] . '</p>
                      <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
                        <dd class="flex justify-center items-center sm:justify-start lg:justify-center xl:justify-center -space-x-1.5 space-x-4">
                          <a href="/mvcTest/MovieController/update/'.$movie['id'].'" class="bg-blue-700 text-white text-center rounded w-28 py-4 hover:bg-blue-800">Modifier</a>
                          <a href="/mvcTest/MovieController/delete/'.$movie['id'].'" class="bg-red-500 text-white text-center rounded w-28 py-4 hover:bg-red-600">Supprimer</a>
                        </dd>
                      </div>
                 </div>
            ';
        }
    ?>
            </div>
        </div>
    </div>
</form>
