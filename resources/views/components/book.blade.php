<article class="qesa">
    <div>
        <img src="{{ asset($qessa->image) }}" alt="عنوان القصه">
        <i class="fa fa-star" style="display: flex;align-content: center;justify-content: center;">
            <span style="position: absolute;top: 9px;color: #000;font-size: 16px;">{{ $qessa->rate }}</span>
            <p>التقييم</p>
        </i>
        @if ($qessa->season > 0)
            <article>
                الجزء: <span>{{ $qessa->season }}</span>
            </article>
        @endif
        <div>
            <a><i class="fal fa-heart"></i></a>
            <a href="{{ asset($qessa->file) }}" download='{{ $qessa->title }}'><i class="fal fa-download"></i></a>
            <a href="{{ url('books/' . $qessa->slug) }}"><i class="fal fa-eye"></i></a>
            <a><i class="fal fa-exclamation"></i></a>
        </div>
    </div>
    <h3><a href="{{ url('books/' . $qessa->slug) }}">{{ $qessa->title }}</a></h3>
</article>
