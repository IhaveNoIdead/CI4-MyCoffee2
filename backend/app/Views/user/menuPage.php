<!DOCTYPE html>
<html>

    <?= view('components/head', [
        'title' => 'My Coffee | Menu'
    ])?>

    <body class="color-espresso">
        <!-- NavBar -->
        <?= view('components/header') ?>

        <main class="space-y-12 py-10">
            <section class="mx-12 my-12 p-8 color-light-espresso rounded-xl shadow">
                <h2 class="text-3xl text-center text-color-light-latte font-bold mt-4 mb-8 mx-4">Drinks</h2>
                <div class="flex-1 gap-6 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <div>
                        <?= view('components/cards/card', [
                            'title' => 'Espresso',
                            'description' => 'Strong and bold, perfect for coffee lovers',
                            'price' => '₱120',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                        ])?>
                    </div>

                     <div>
                        <?= view('components/cards/card', [
                            'title' => 'Espresso',
                            'description' => 'Strong and bold, perfect for coffee lovers',
                            'price' => '₱120',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                        ])?>
                    </div>

                     <div>
                        <?= view('components/cards/card', [
                            'title' => 'Espresso',
                            'description' => 'Strong and bold, perfect for coffee lovers',
                            'price' => '₱120',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                        ])?>
                    </div>

                     <div>
                        <?= view('components/cards/card', [
                            'title' => 'Espresso',
                            'description' => 'Strong and bold, perfect for coffee lovers',
                            'price' => '₱120',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                        ])?>
                    </div>

                     <div>
                        <?= view('components/cards/card', [
                            'title' => 'Espresso',
                            'description' => 'Strong and bold, perfect for coffee lovers',
                            'price' => '₱120',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                        ])?>
                    </div>
                </div>
            </section>

            <section class="mx-12 my-12 p-8 color-light-espresso rounded-xl shadow">
                <h2 class="text-3xl text-center text-color-light-latte font-bold mt-4 mb-8 mx-4">Pastry</h2>
                <div class="flex-1 gap-6 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <div>
                        <?= view('components/cards/card', [
                            'title' => 'Apple Crumble Muffin',
                            'description' => 'A warm, fluffy, moist muffin bursting with sweet apple chunks, topped with a butter cinnamon crumble that melts in your mouth. Perfect with morning coffee or afternoon snack',
                            'price' => '₱76',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://images.ctfassets.net/rve58b4kyp9e/2x13frzbOBgS0ucwvEckoX/8330ab06f0096bbd8d078c095a26be77/Coffee_Shop_Muffins_3.jpg'
                        ])?>
                    </div>

                    <div>
                        <?= view('components/cards/card', [
                            'title' => 'Apple Crumble Muffin',
                            'description' => 'A warm, fluffy, moist muffin bursting with sweet apple chunks, topped with a butter cinnamon crumble that melts in your mouth. Perfect with morning coffee or afternoon snack',
                            'price' => '₱76',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://images.ctfassets.net/rve58b4kyp9e/2x13frzbOBgS0ucwvEckoX/8330ab06f0096bbd8d078c095a26be77/Coffee_Shop_Muffins_3.jpg'
                        ])?>
                    </div>

                    <div>
                        <?= view('components/cards/card', [
                            'title' => 'Apple Crumble Muffin',
                            'description' => 'A warm, fluffy, moist muffin bursting with sweet apple chunks, topped with a butter cinnamon crumble that melts in your mouth. Perfect with morning coffee or afternoon snack',
                            'price' => '₱76',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://images.ctfassets.net/rve58b4kyp9e/2x13frzbOBgS0ucwvEckoX/8330ab06f0096bbd8d078c095a26be77/Coffee_Shop_Muffins_3.jpg'
                        ])?>
                    </div>

                    <div>
                        <?= view('components/cards/card', [
                            'title' => 'Apple Crumble Muffin',
                            'description' => 'A warm, fluffy, moist muffin bursting with sweet apple chunks, topped with a butter cinnamon crumble that melts in your mouth. Perfect with morning coffee or afternoon snack',
                            'price' => '₱76',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://images.ctfassets.net/rve58b4kyp9e/2x13frzbOBgS0ucwvEckoX/8330ab06f0096bbd8d078c095a26be77/Coffee_Shop_Muffins_3.jpg'
                        ])?>
                    </div>

                    <div>
                        <?= view('components/cards/card', [
                            'title' => 'Apple Crumble Muffin',
                            'description' => 'A warm, fluffy, moist muffin bursting with sweet apple chunks, topped with a butter cinnamon crumble that melts in your mouth. Perfect with morning coffee or afternoon snack',
                            'price' => '₱76',
                            'link' => null,
                            'status' => null,
                            'color' => null,
                            'image' => 'https://images.ctfassets.net/rve58b4kyp9e/2x13frzbOBgS0ucwvEckoX/8330ab06f0096bbd8d078c095a26be77/Coffee_Shop_Muffins_3.jpg'
                        ])?>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?= view('components/footer') ?>

    </body>
</html>