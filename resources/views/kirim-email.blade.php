<div class="row justify-content-center"></div>
    <h3 class="text-center my-2">Tutorial Queue Laravel</h3>
    <div class="col-md-4 p-4"></div>
    @if (session("status"))
    <div class="alert alert-primary" role="alert">
        {{session("status")}}
    </div>

    @endif
    <form action="{{ route('post-email') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
        </div>
        <div class="form-group my-3">
            <label for="email">Email Tujuan</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
        </div>
        <div class="form-group my-3">
            <label for="name">Body Deskripsi</label>
            <textarea name="body" id="" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primray">Kirim Email</button>
        </div>

    </form>