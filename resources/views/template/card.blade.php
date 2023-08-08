<div class="container mt-5">
    <div class="card-title text-center bg-primary text-light">PRODUK NOKIA</div>
    <hr>
    <div class="row">
        @foreach ($data as $item)
            <div class="col-3">
                <div class="card shadow" style="background-color: rgba(98, 136, 159)">
                    <div class="card-body">
                        <img width="426" height="240" src="{{ asset($item->foto) }}" alt="fotonya hilang :v" class="card-img-top">
                        <p class="card-detail">nama produk : {{ $item->nama }}</p>
                        <p class="card-detail">harga produk Rp: {{ $item->harga }}</p>
                        <a href="{{ route('detailtransaksi', $item->id) }}" class="btn btn-primary w-100">ingfo barang</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
