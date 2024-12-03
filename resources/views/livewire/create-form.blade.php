<form class="p-5 rounded shadow bg-sec" wire:submit="saveArticle">
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" id="title" class="form-control border-success" wire:model="title">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Testo</label>
        <textarea wire:model="content" id="content" class="form-control  border-success" cols="30" rows="10"></textarea>
    </div>
    <div class="mt-5 text-center">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
