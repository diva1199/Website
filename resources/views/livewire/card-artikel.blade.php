<div>
    @foreach ($art as $a)
    <div class="card border-light">
        <h5 class="card-header bg-dark text-light justify-content-center d-flex">Artikel Terbaru</h5>
    </div>
        <div class="card-body">
          <h5 class="card-title">{{ $a->judul }}</h5>
          <p class="card-text"> {{$a->deskripsi}} </p>
        </div>
    </div>
    @endforeach
</div>
