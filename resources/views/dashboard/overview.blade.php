<x-dashboard-layout>
    <header class="flex justify-between items-center">
        <div>
            <h1>My Wallet #1</h1>
            <p>Welcome back!</p>
        </div>

        <button class="btn btn-primary">Change Wallet</button>
    </header>

    <section>
        <x-overview-stats />
    </section>

    <x-recent-transactions />
</x-dashboard-layout>