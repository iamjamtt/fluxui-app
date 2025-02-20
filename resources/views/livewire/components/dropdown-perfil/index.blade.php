<flux:dropdown position="{{ $position }}" align="{{ $align }}" class="{{ $sidebar ? 'max-lg:hidden' : 'min-lg:hidden block' }}">
    <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Jamt Mendoza" />

    <flux:menu>
        <flux:menu.item icon="arrow-right-start-on-rectangle" variant="danger">Logout</flux:menu.item>
    </flux:menu>
</flux:dropdown>
