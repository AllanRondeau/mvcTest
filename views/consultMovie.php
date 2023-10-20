<section class=" mt-20">
    <form action="consult" method="POST" class="flex flex-col  ">
        <div class="ml-12 space-y-14">
            <div class="flex flex-row items-center space-x-4">
                <h1 class="text-4xl font-bold">Titre : </h1>
                <p class="text-2xl"><?php echo $_POST['movie']['title'] ?></p>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="flex flex-row space-x-4">
                    <h3 class="font-semibold  text-3xl">Genre : </h3>
                    <p class="text-2xl text-blue-600"><?php echo $_POST['movie']['genre'] ?></p>
                </div>
                <div class="flex flex-row space-x-4">
                    <h3 class="font-semibold text-3xl">Date de sortie : </h3>
                    <p class="text-2xl text-blue-600"><?php echo $_POST['movie']['year_release'] ?></p>
                </div>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="flex flex-row space-x-4">
                    <h3 class="font-semibold  text-3xl">Scénariste : </h3>
                    <p class="text-2xl text-blue-600"><?php echo $_POST['movie']['scriptwriter'] ?></p>
                </div>
                <div class="flex flex-row space-x-4">
                    <h3 class="font-semibold text-3xl">Producteur : </h3>
                    <p class="text-2xl text-blue-600"><?php echo $_POST['movie']['film_producer'] ?></p>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-4">
                <h1 class="text-3xl font-bold">Entreprise de production : </h1>
                <p class="text-2xl"><?php echo $_POST['movie']['production_company'] ?></p>
            </div>
        </div>
        <div class="w-full  mt-14 h-2 bg-gradient-to-r from-blue-500 to-blue-900 flex justify-center"></div>
        <div class="flex flex-col items-center mt-8">
            <h1 class="text-4xl font-bold">Synopsis : </h1>
            <p class="text-2xl"><?php echo $_POST['movie']['synopsis'] ?></p>
        </div>
    </form>
</section>