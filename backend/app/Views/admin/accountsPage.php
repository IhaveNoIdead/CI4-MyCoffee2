<!DOCTYPE html>
<html>

    <?= view('components/head', [
        'title' => 'My Coffee | Admin - Accounts'
    ])?>

    <body class="color-dark-latte">
        <!-- NavBar -->
        <?= view('components/header') ?>

        <main class="space-y-12 py-10">

            <section class=" mx-8 my-8 p-6 color-light-cappuccino rounded-xl shadow">
                <div class="mb-6">
                    <h2 class="text-2xl text-center text-color-dark-espresso font-bold mt-4 mb-4 mx-4">Accounts</h2>
                </div>

                <div class="overflow-x-auto rounded-lg shadow">
                    <table class="min-w-full text-sm text-left text-color-dark-espresso">
                        <thead class="color-light-latte">
                            <tr>
                                <th class="px-6 py-3">First Name</th>
                                <th class="px-6 py-3">Middle Name</th>
                                <th class="px-6 py-3">Last Name</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3">Type</th>
                                <th class="px-6 py-3">Created At</th>
                                <th class="px-6 py-3">Updated At</th>
                            </tr>
                        </thead>

                        <tbody class="color-light-latte divide-y divide-gray-700">
                            <?php if (!empty($users)): ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td class="px-6 py-4"><?= esc($user->first_name) ?></td>
                                        <td class="px-6 py-4"><?= esc($user->middle_name) ?></td>
                                        <td class="px-6 py-4"><?= esc($user->last_name) ?></td>
                                        <td class="px-6 py-4"><?= esc($user->email) ?></td>
                                        <td class="px-6 py-4"><?= esc($user->type) ?></td>
                                        <td class="px-6 py-4"><?= esc($user->created_at) ?></td>
                                        <td class="px-6 py-4"><?= esc($user->updated_at) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center py-6 text-gray-400">No users found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?= view('components/footer') ?>

    </body>
</html>