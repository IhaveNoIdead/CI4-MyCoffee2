<form id="accountsFilterForm" onsubmit="return false;" class="flex sm:flex-row flex-col sm:items-center gap-3 mb-4">
    <input type="search" id="accounts_query" placeholder="Search by Order ID, User ID, or Status" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full sm:w-1/3">

    <select id="accounts_sort" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none w-full sm:w-48 cursor-pointer">
        <option value="">Sort — default</option>
        <option value="id_asc">Order ID Asc</option>
        <option value="id_desc">Order ID Desc</option>
        <option value="created_asc">Oldest</option>
        <option value="created_desc">Newest</option>
    </select>

    <select id="accounts_type" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none w-full sm:w-48 cursor-pointer">
        <option value="all">Status— all</option>
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
        <option value="cancelled">Cancelled</option>
    </select>

    <div class="flex color-light-latte gap-2 ml-auto  rounded-md">
        <button type="button" id="accountsResetBtn" class="inline-flex items-center bg-white hover:bg-slate-50 shadow-sm px-3 py-2 border border-slate-200 rounded-md cursor-pointer">Reset</button>
    </div>
</form>

<script>
    (function() {
        function waitForTable(maxAttempts = 40, interval = 50) {
            return new Promise((resolve) => {
                let attempts = 0;
                const intervalId = setInterval(() => {
                    const table = document.querySelector('table');
                    attempts++;
                    if (table || attempts >= maxAttempts) {
                        clearInterval(intervalId);
                        resolve(table);
                    }
                }, interval);
            });
        }

        function initForTable(table) {
            if (!table) return;

            const queryInput = document.getElementById('accounts_query');
            const sortSelect = document.getElementById('accounts_sort');
            const typeSelect = document.getElementById('accounts_type');
            const resetBtn = document.getElementById('accountsResetBtn');

            // Build array snapshot of rows with searchable fields
            const rows = Array.from(table.querySelectorAll('tbody tr'));
            const snapshot = rows.map(row => {
                const cols = Array.from(row.querySelectorAll('td'));
                return {
                    orderId: (cols[0]?.textContent ?? '').trim().toLowerCase(),
                    userId: (cols[1]?.textContent ?? '').trim().toLowerCase(),
                    totalAmount: (cols[3]?.textContent ?? '').trim().toLowerCase(),
                    status: (cols[4]?.textContent ?? '').trim().toLowerCase(),
                    paymentMethod: (cols[5]?.textContent ?? '').trim().toLowerCase(),
                    createdAt: (cols[9]?.textContent ?? '').trim().toLowerCase(),
                    html: row.outerHTML
                };
            });

            function render(list) {
                const tbody = table.querySelector('tbody');
                if (!list.length) {
                    tbody.innerHTML = '<tr><td class="p-3" colspan="12">No orders match your search.</td></tr>';
                    return;
                }
                tbody.innerHTML = list.map(i => i.html).join('\n');
            }

            function apply() {
                const query = (queryInput.value || '').toLowerCase().trim();
                const sort = sortSelect.value;
                const typeFilter = (typeSelect && typeSelect.value) ? typeSelect.value : 'all';

                let out = snapshot.filter(item => {
                    if (query && !(item.name.includes(query) || item.email.includes(query))) 
                    {
                        return false;
                    }

                    // status filtering
                    if (statusFilter !== 'all' && item.status !== statusFilter.toLowerCase()) 
                    {
                        return false;
                    }
                    return true;
                });

                if (sort === 'id_asc') out.sort((a, b) => a.orderId.localeCompare(b.orderId, undefined, {numeric: true}));
                else if (sort === 'id_desc') out.sort((a, b) => b.orderId.localeCompare(a.orderId, undefined, {numeric: true}));
                else if (sort === 'created_asc') out.sort((a, b) => a.createdAt.localeCompare(b.createdAt));
                else if (sort === 'created_desc') out.sort((a, b) => b.createdAt.localeCompare(a.createdAt));

                render(out);
            }

            [queryInput, sortSelect, typeSelect].forEach(el => el && el.addEventListener('input', apply));
            resetBtn && resetBtn.addEventListener('click', () => {
                queryInput.value = '';
                sortSelect.value = '';
                if (typeSelect) typeSelect.value = 'all';
                apply();
            });

            // initial
            apply();
        }

        // Wait for DOM ready and the table to exist (useful if table is rendered server-side after this include)
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            waitForTable().then(initForTable);
        } else {
            document.addEventListener('DOMContentLoaded', () => waitForTable().then(initForTable));
        }
    })();
</script>