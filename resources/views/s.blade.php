@extends('layouts.layout')
@section('content')
    <main class="single">
        <div>
            <article class="shad">
                <h3>تقييم</h3>
                <div>
                    <i data-order="1" onclick="rate(this)" class="fa fa-star"></i>
                    <i data-order="2" onclick="rate(this)" class="fa fa-star"></i>
                    <i data-order="3" onclick="rate(this)" class="fa fa-star"></i>
                    <i data-order="4" onclick="rate(this)" class="fa fa-star"></i>
                    <i data-order="5" onclick="rate(this)" class="fa fa-star"></i>
                </div>
                <button>تاكيد</button>
            </article>

            <section class="shad">
                <img src="{{ asset($book->image) }}">

                <article>
                    <h3>{{ $book->title }}</h3>
                    <p>{{ Str::substr($book->description,0,strpos($book->description, '.', strpos($book->description, '.', strpos($book->description, '.') + 1) + 1) + 1) }}
                    </p>

                    <div>
                        <p><span>التاريخ:</span>{{ $book->created_at }}</p>
                        <p><span>التقييم:</span> {{ $book->rate }} نجوم</p>
                        <p><span>التحميلات:</span> {{ $book->downloads_count }} مره</p>
                        <p><span>المشاهدات:</span> {{ $book->views }} مشاهده</p>
                    </div>

                    <section>
                        <p>
                            <a href="{{ asset($book->file) }}" download="{{ $book->title }}"><i
                                    class="fal fa-download"></i></a>
                        </p>
                        <p>
                            <a href="#"><i class="fal fa-heart"></i></a>
                        </p>
                        <p>
                            <a href="#"><i class="fal fa-exclamation"></i></a>
                        </p>
                    </section>

                    <article class="share closed">
                        <i class="fal fa-share" onclick="this.parentElement.classList.toggle('closed')"></i>
                        <i class="fal fa-times"></i>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-telegram"></i>
                        </a>
                    </article>
                </article>
            </section>
        </div>

        <section class="shad">
            <h3>{{ $book->title }}</h3>
            <p>
                {{ $book->description }}
            </p>
        </section>

        <article>
            @foreach ($qesas as $qessa)
                @include('components.book', ['qessa' => $qessa])
            @endforeach
        </article>
    </main>

    <div class="null"></div>
@endsection
