<body class="bg-white">
<div class=" max-w-xl container mx-auto ">
    <div class=" w-full">
        <p class="text-center text-neutral-600 text-base font-semibold">Créer votre compte</p>
        <div class="mt-10">
            <form action="create" class="px-10" method="post">
                <div class="mt-2 ">
                    <label for="" class="text-neutral-600 text-base font-normal">Email :</label>
                    <div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
                        <input type="text" name="email" placeholder="info@provistechnologies.com" id=""
                               class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                    </div>
                </div>
                <div class="mt-6 ">
                    <label for="" class="text-neutral-600 text-base font-normal">Mot de passe :</label>
                    <div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
                        <input type="password" name="password" placeholder="info@provistechnologies.com" id=""
                               class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                    </div>
                </div>
                <button
                    class="border border-indigo-900 rounded-lg  text-center  text-indigo-900 bg-white text-base font-semibold w-full py-3 mt-9">S'inscrire</button>
                <p class="text-red-500"><?php echo $_POST['message'] ?></p>
                <a href="signup" class="mt-9 text-blue-500 underline"> Se connecter</a>

            </form>
        </div>
    </div>
</div>
</body>