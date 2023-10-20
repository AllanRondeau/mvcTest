<body class="bg-white">
<div class=" max-w-xl container mx-auto ">
    <div class=" w-full">
        <p class="text-center text-neutral-600 text-base font-semibold">Se connecter</p>
        <p class="text-center text-green-500"><?php echo $_SESSION['signinValidation']?></p>
        <div class="mt-10">
            <form action="signup" class="px-10" method="post">
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
                    class="bg-indigo-900 rounded-lg shadow text-center text-white text-base font-semibold w-full py-3 mt-9">Se connecter
                    </button>
                <p class="text-red-500"><?php echo $_POST['message'] ?></p>
                <a href="create" class="mt-9 text-blue-500 underline"> S'inscrire</a>
            </form>
        </div>
    </div>
</div>
</body>