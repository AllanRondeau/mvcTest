<p class="text-red-500 text-center"><?php echo $_POST['message']?></p>
<div class="flex items-center justify-center p-12" xmlns="http://www.w3.org/1999/html">
    <div class="mx-auto w-full max-w-[550px]">
        <?php var_dump($_POST['movie']['id']); ?>
        <form <?php echo 'action="'.$_POST['movie']['id'].'"'; ?> method="POST">
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                            for="title"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Titre du film
                        </label>
                        <input
                            type="text"
                            name="title"
                            value="<?php echo $_POST['movie']['title']?>"
                            placeholder="Titanic"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                            for="genre"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Genre
                        </label>
                        <input
                            type="text"
                            name="genre"
                            value="<?php echo $_POST['movie']['genre']?>"
                            placeholder="Drame"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2 m-auto">
                    <div class="mb-5">
                        <label
                            for="synopsis"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Synopsis
                        </label>
                        <textarea
                            name="synopsis"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            rows="5"
                            required
                        ><?php echo $_POST['movie']['synopsis']?></textarea>
                    </div>
                </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                            for="scriptwriter"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Scénariste
                        </label>
                        <input
                            type="text"
                            name="scriptwriter"
                            value="<?php echo $_POST['movie']['scriptwriter']?>"
                            placeholder="James Cameron"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                            for="filmProducer"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Producteur
                        </label>
                        <input
                            type="text"
                            name="filmProducer"
                            value="<?php echo $_POST['movie']['film_producer']?>"
                            placeholder="James Cameron"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required
                        />
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <label
                    for="productionCompagny"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Entreprise de production
                </label>
                <input
                    type="text"
                    name="productionCompany"
                    value="<?php echo $_POST['movie']['production_company']?>"
                    placeholder="20th century fox"
                    min="0"
                    class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    required
                />
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                            for="date"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Date
                        </label>
                        <input
                            type="number"
                            value="<?php echo $_POST['movie']['year_release']?>"
                            min="1900"
                            max="2023"
                            name="date"
                            id="date"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required
                        />
                    </div>
                </div>
            </div>
            <div>
                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    type="submit"
                >
                    Ajouter
                </button>
            </div>
        </form>
    </div>
</div>

