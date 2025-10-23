<!DOCTYPE html> <html> <?= view('components/head', [ 'title' => 'My Coffee | Order Page' ])?> <body class="color-dark-latte">
    <!-- NavBar -->
    <?= view('components/header') ?>

    <main class="space-y-12 py-10">
        <section class="max-w-6xl mx-auto p-6 color-light-cappuccino rounded-xl shadow">
            <h2 class="text-3xl text-center text-color-dark-espresso font-bold mb-8">Your Order</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?= view('components/cards/card', [
                    'title' => 'Caffe Latte',
                    'description' => 'Smooth espresso blended with creamy milk.',
                    'price' => '₱150',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Caffe_Latte_at_Pulse_Cafe.jpg'
                ])?>

                <?= view('components/cards/card', [
                    'title' => 'Mocha',
                    'description' => 'Rich espresso with chocolate and steamed milk.',
                    'price' => '₱200',
                    'image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg'
                ])?>

                <?= view('components/cards/card', [
                    'title' => 'Apple Crumble Muffin',
                    'description' => 'Soft, buttery muffin topped with a sweet crumble — perfect with coffee.',
                    'price' => '₱76',
                    'image' => 'https://images.ctfassets.net/rve58b4kyp9e/2x13frzbOBgS0ucwvEckoX/8330ab06f0096bbd8d078c095a26be77/Coffee_Shop_Muffins_3.jpg'
                ])?>
            </div>

            <!-- Order Summary -->
            <div class="text-center mt-8">
                <hr class="border-black/30 my-4">
                <h3 class="text-xl font-semibold text-color-dark-espresso">Total: ₱426</h3>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center mt-6">
                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Submit Order',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ])?>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>