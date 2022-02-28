@extends('admin.app')
@section('content')
    <div class="container bg-white contactus py-4">
        {{ Form::open(['url' => route('admin.contactus.update', $contactUs->id),'method' => 'PUT','id' => 'contactus-form']) }}
        @csrf
        <button type="submit" id="submit" class="btn btn-success mb-3 w-100 disabled" btn-lg btn-block">Save</button>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="title" id="title" placeholder="Tuliskan judulnya di sini"
                style="height: auto; overflow: hidden;">{{ $contactUs->title }}</textarea>
            <label for="title">Judul</label>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Tuliskan kontennya di sini" name="content" id="content"
                        style="height: 400px">{{ $contactUs->content }}</textarea>
                    <label for="content">Konten</label>
                </div>
                <div class="social-media">
                    <div class="input-group mb-3">
                        <span class="input-group-text material-icons-outlined" id="basic-addon1">call</span>
                        <input type="text" class="form-control" placeholder="Phone" aria-label="Phone"
                            aria-describedby="basic-addon1" id="phone" name="phone" value="{{ $contactUs->phone }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text material-icons-outlined" id="basic-addon1">email</span>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                            aria-describedby="basic-addon1" id="email" name="email" value="{{ $contactUs->email }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text material-icons-outlined" id="basic-addon1">facebook</span>
                        <input type="text" class="form-control" placeholder="Facebook" aria-label="Facebook"
                            aria-describedby="basic-addon1" id="facebook" name="facebook"
                            value="{{ $contactUs->facebook }}">
                        <input type="text" class="form-control" placeholder="Facebook URL" aria-label="Facebook URL"
                            aria-describedby="basic-addon1" id="facebook_url" name="facebook_url"
                            value="{{ $contactUs->facebook_url }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-instagram"></i></span>
                        <input type="text" class="form-control" placeholder="Instagram" aria-label="Instagram"
                            aria-describedby="basic-addon1" id="instagram" name="instagram"
                            value="{{ $contactUs->instagram }}">
                        <input type="text" class="form-control" placeholder="Instagram URL" aria-label="Instagram URL"
                            aria-describedby="basic-addon1" id="instagram_url" name="instagram_url"
                            value="{{ $contactUs->instagram_url }}">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="address" id="address"
                        placeholder="Tuliskan alamatnya di sini" value="{{ $contactUs->address }}">
                    <label for="address">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="complete_address" id="complete_address"
                        placeholder="Tuliskan alamat lengkapnya di sini" value="{{ $contactUs->complete_address }}">
                    <label for="address">Alamat</label>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="200" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=alam%20rohman%20garden&t=&z=17&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://putlocker-is.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 200px;
                                width: 100%
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: auto;
                                a width: 100%;
                            }

                        </style>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
