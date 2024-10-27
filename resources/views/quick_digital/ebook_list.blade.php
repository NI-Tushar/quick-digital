@extends('quick_digital.layout.layout')

@section('content')
<main>
    <section class="max-width custom-padding container py-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 d-flex justify-content-center">
            @foreach($ebooks as $ebook)
                <div class="col d-flex justify-content-center mx-1">
                    <div class="d-flex flex-column justify-content-between gap-3 gap-md-0 pt-0 ebook__list__card">
                        <a href="{{ url('quick-digital/ebook/' . $ebook->id) }}" class="overflow-hidden">
                            <img class="img-fluid rounded-top-3 ebook__list__img w-100"
                                src="{{ asset($ebook->cover_image ? $ebook->cover_image : 'front/assets/images/no_image.jpg') }}" alt="{{ $ebook->title }}">
                        </a>
                        <a href="{{ url('quick-digital/ebook/' . $ebook->id) }}"
                            class="text-decoration-none text-dark py-2">
                            <h3 class="fw-bold m-0 px-2 fs-5">{{ $ebook->title }}</h3>
                        </a>
                        <div class="d-flex gap-3 px-2 py-2">
                            <span class="fw-bold fs-5">৳ {{ $ebook->price }}</span>
                            @if($ebook->original_price)
                                <span class="text-decoration-line-through">৳ {{ $ebook->original_price }}</span>
                            @endif
                        </div>
                        <a href="{{ url('quick-digital/ebook/' . $ebook->id) }}" class="mx-2 text-center text-decoration-none fw-bold add__to__cart__btn py-2">
                            এখনই কিনুন
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection
