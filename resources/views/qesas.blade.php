@extends('layouts.layout')
@section('content')
    <div class="container">
        <!-- side -->
        <section class="shad side">
            <i onclick="hideSide(this)" class="fal fa-arrow-right"><span></span></i>
            <div>
                <h3>الحساب</h2>
                <span onclick="s('.login').classList.remove('hidden');s('body').classList.add('unscrolable');"><i class="fal fa-sign-in"></i> دخول </span>
                <span onclick="s('.signup').classList.remove('hidden');s('body').classList.add('unscrolable');"><i class="fal fa-plus-square"></i> جديد </span>
            </div>

            <div class="hidden" class="closed closed1">
                <h3 onclick="closetgl(this)"> <i class="fal fa-chevron-up"></i> منشوراتك</h2>
                <a href="#">قصه جديده</a>
                <a href="#">متسلسله جديده</a>
                <a href="#">متابعه متسلسله</a>
            </div>

            <div class="closed closed1">
                <h3 onclick="closetgl(this)"> <i class="fal fa-chevron-up"></i> النوع</h2>

                <span class="active" onclick="activeTgl(this)">الكل</span>
                <span onclick="activeTgl(this)">اثاره</span>
                <span onclick="activeTgl(this)">اكشن</span>
                <span onclick="activeTgl(this)">تاريخ</span>
                <span onclick="activeTgl(this)">جريمه</span>
                <span onclick="activeTgl(this)">حرب</span>
                <span onclick="activeTgl(this)">رومانسي</span>
                <span onclick="activeTgl(this)">رياضي</span>
                <span onclick="activeTgl(this)">سيره ذاتيه</span>
                <span onclick="activeTgl(this)">عائلي</span>
                <span onclick="activeTgl(this)">غريبه</span>
                <span onclick="activeTgl(this)">غموض</span>
                <span onclick="activeTgl(this)">كوميديا</span>
                <span onclick="activeTgl(this)">مغامره</span>
                <span onclick="activeTgl(this)">موسيقي</span>
                <span onclick="activeTgl(this)">وثائقي</span>
            </div>
        </section>

        <!-- qesas container -->
        <section class="QMcontainer">
            <section class="Qcontainer">
                <h2>القصص</h2>
                @foreach ($qesas as $qessa)
                    @include('components.book', ['qessa' => $qessa])
                @endforeach
            </section>
            @include('components.pagination',['paginator'=>$qesas])
        </section>
    </div>
@endsection
