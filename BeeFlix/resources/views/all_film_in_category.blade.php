<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BeeFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<style>
    .card {
        background-image: url({{ asset('assets/cardbg.jpg')}});
    }
</style>

<body background="{{ url('assets/background.jpg') }}">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-danger" href="/home">
                <h1><strong>BeeFlix</strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto mr-3">
                    <a href="/home"><h5 class="text-danger">See All Film</h5></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-3">
        <img src="{{ url('assets/back.png')}}" alt="" width="2%" class="d-inline">
        <a href="{{ url()->previous() }}"><h5 class="text-light d-inline ml-2"> Back </h5></a>
    </div>

    <div class="container mb-5">
        <div class="mt-5">
            <h2 class="text-light">{{ $genre->name }}</h2>
        </div>
    </div>

    <div class="container text-center">
        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($movie as $m)
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ url('assets/' . $m->photo) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-light"><p class="card-text">{{$m->title}}</p></h5>
                            <a href="/movie_details/{{ $m->id }}" class="btn btn-danger">See Film</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>
