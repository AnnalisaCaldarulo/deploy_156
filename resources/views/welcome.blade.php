<x-layout>
    <div class="container min-h d-flex flex-column justify-content-evenly">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-3 text-center py-5 text-white">
                    Deploy 156
                </h1>
            </div>
        </div>
        <div class="row justify-content-center ">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 mb-3 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text"> {{$article->content}} </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
