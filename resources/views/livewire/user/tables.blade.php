<div class="row">
    @foreach ($tables as $table)
        <div class="col-6 pb-3">
            <livewire:user.tables.components.card-of-table :table="$table" />
        </div>
    @endforeach
</div>
