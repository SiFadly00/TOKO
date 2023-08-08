<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Detail</title>
</head>

<body>
    @include('template.nav')

    <div class="container mt-5">
        <div class="card-title text-center bg-primary text-light">DETAIL {{ $produk->name }}</div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card-shadow" style="background-color: rgba(98, 136, 159)">
                    <div class="card-body">
                        <img width="426" height="440" src="{{ asset($produk->foto) }}" width="fill" alt="{{ $produk->name }}"
                            class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow" style="background-color: rgba(98, 136, 159)">
                    <div class="card-body">
                        <p class="card-detail">nama produk : {{ $produk->nama }}</p>
                        <p class="card-detail">harga produk Rp: {{ $produk->harga }}</p>
                        <a href="" class="btn btn-primary w-100">beli</a>
                        {{-- {{ route('detail', $item->id) }}    --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>











    <script src="js/bootstrap.min.js"></script>
</body>

</html>
