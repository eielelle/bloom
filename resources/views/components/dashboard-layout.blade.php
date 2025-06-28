<x-global-layout>
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->
            {{ $slot }}
            <label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label>
        </div>
        <x-dashboard-drawer />
    </div>
</x-global-layout>