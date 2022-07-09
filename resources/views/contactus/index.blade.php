@extends('layouts.app')
@section('content')
    <style>
        article#social-media {
            display: flex;
        }

        article#social-media ul {
            list-style: none;
        }

        article#social-media ul li {
            display: flex;
            align-items: center
        }

    </style>
    <div class="container bg-light p-4" id="contactus">
        <div class="row">
            <h1 id="title">{{ $contactUs->title }}</h1>
            <div class="col-md-9">
                <article id="content">
                    <p>{!! $contactUs->content !!}</p>
                </article>
                <article id="social-media">
                    <ul>
                        <li>
                            <span class="material-icons-outlined">call</span>
                            <a class="ms-3"
                                href="{{ 'https://api.whatsapp.com/send?phone=6289517671541&text=Hai!' }}" target="_blank"
                                rel="noopener noreferrer">{{ $contactUs->phone }}</a>
                        </li>
                        <li>
                            <span class="material-icons-outlined">email</span>
                            <a class="ms-3" href="mailto:{{ $contactUs->email }}">{{ $contactUs->email }}</a>
                        </li>
                        <li>
                            <i class="bi bi-instagram fs-4"></i>
                            <a class="ms-3" href="{{ $contactUs->instagram_url }}" target="_blank"
                                rel="noopener noreferrer">{{ $contactUs->instagram }}</a>
                        </li>
                        <li>
                            <span class="material-icons-outlined">facebook</span>
                            <a class="ms-3" href="{{ $contactUs->facebook_url }}" target="_blank"
                                rel="noopener noreferrer">{{ $contactUs->facebook }}</a>
                        </li>
                    </ul>
                </article>
            </div>
            <div class="col-md-3">
                <article id=address>
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
                        <p>
                            {{ $contactUs->address }}
                        </p>
                </article>
            </div>
        </div>
    </div>
@endsection
