<form class="p-5 rounded shadow bg-sec" wire:submit="saveArticle">
    <div class="d-flex justify-content-center">
        @if (session('success'))
            <div class="alert alert-success text-center w-75">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger w-50">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
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
