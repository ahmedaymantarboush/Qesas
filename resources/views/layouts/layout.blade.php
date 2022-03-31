<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- description -->
    <title>قصص | {{$page_name}}</title>

</head>

<body class="">
    <!-- header -->
    <header class="shad">
        <a href="/">الرئيسية</a>
        <a href="{{ route('qesas') }}">قصص</a>
        <a href="{{ route('motasalselat') }}">متسلسلات</a>
        <a
            onclick="s('.search > form > input').focus();s('.search').classList.remove('hidden');s('body').classList.add('unscrolable');esc()"><i
                class="fal fa-search"></i> البحث </a>
        <a onclick="s('.fav').classList.remove('hidden');s('body').classList.add('unscrolable');esc()"><i
                class="fal fa-heart"></i> المفضله </a>
    </header>
    <header>
        <a href="#"><i class="fal fa-home-alt"></i></a>
        <a href="#"><i class="fal fa-window-restore"></i></a>
        <a href="#"><i class="fal fa-boxes"></i></a>
        <a
            onclick="s('.search > form > input').focus();s('.search').classList.remove('hidden');s('body').classList.add('unscrolable');esc()"><i
                class="fal fa-search"></i></a>
        <a onclick="s('.fav').classList.remove('hidden');s('body').classList.add('unscrolable');esc()"><i
                class="fal fa-heart"></i></a>
    </header>
    <div>
    </div>

        @yield('content')
        <section class="signing login hidden floated">
            <div onclick="hide(this.parentElement)" class="overlay"></div>
            <article>
                <i class="fal fa-times" onclick="hide(this.parentElement.parentElement)"></i>
                <h3> <i class="fal fa-user"></i> تسجيل الدخول</h3>
                {{-- <form action="{{ route('') }}"> --}}
                <form id="login" method="POST" action="{{ route('login') }}">
                    @csrf

                    <input type="email" autocomplete="no" placeholder="البريد الالكتروني" required>
                    <input type="password" autocomplete="no" placeholder="كلمه المرور" required>
                    <p>
                        نسيت كلمه المرور <a href="{{ route('password.request') }}">استرجاع</a>
                    </p>
                    <div>
                        <button> <i class="  fal fa-sign-in"></i> دخول</button>
                    </div>
                </form>
            </article>
        </section>

        <section class="signing signup hidden floated">
            <div onclick="hide(this.parentElement)" class="overlay"></div>
            <article>
                <i class="fal fa-times" onclick="hide(this.parentElement.parentElement)"></i>
                <h3> <i class="fal fa-user-plus"></i> حساب جديد </h3>
                <form id="signup" method="POST" action="{{ route('register') }}">
                    @csrf

                    <input type="text" placeholder="اسم المستخدم" required>
                    <input type="email" autocomplete="no" placeholder="البريد الالكتروني" required>
                    <input type="password" autocomplete="no" placeholder="كلمه المرور" required>
                    <input type="password" autocomplete="no" placeholder="تاكيد كلمه المرور" required>
                    <article>
                        <input type="checkbox" id="accept" checked>
                        <span></span>
                        <label for="accept">بالانضمام فانك توافق علي <a href="#">سياسه الخصوصيه</a> و <a href="#">شروط
                                الاستخدام</a></label>
                    </article>
                    <div>
                        <button> <i class="fal fa-plus-square"></i> تسجيل </button>
                    </div>
                </form>
            </article>
        </section>

        <section class="cookies">
            <p>احنا بنستخدم كوكيز عشان تاخد احسن تجربه :)</p>
            <button onclick="this.parentElement.classList.remove('showen'); document.cookie = 'cookies=true';">اخفاء</button>
        </section>

        <section class="floated hidden report">
            <div onclick="hide(this.parentElement)" class="overlay"></div>
            <article>
                <i class="fal fa-times" onclick="hide(this.parentElement.parentElement)"></i>
                <h3> <i class="fa fa-exclamation"></i> تبليغ </h3>
                <form onsubmit="return false">
                    <input type="url" placeholder="ارفق رابط (اختياري)">
                    <textarea placeholder="ما الذي ترغب بالابلاغ عنه"></textarea>
                    <div>
                        <button> تبليغ </button>
                    </div>
                </form>
            </article>
        </section>

        <section class="search hidden">
            <i class="fal fa-times" onclick="hide(this.parentElement)"></i>
            <h3><i class="fal fa-search"></i> البحث</h3>

            <form class="shad" onsubmit="return false">
                <input type="text" placeholder="كلمات البحث..." required>
                <select>
                    <option value="">الاحدث</option>
                    <option value="">الاقدم</option>
                    <option value="">الاكثر مشاهده</option>
                    <option value="">الاقل مشاهده</option>
                    <option value="" selected>الاعلي تقييما</option>
                    <option value="">الاقل تقييما</option>
                </select>
                <button><i class="fal fa-search"></i></button>
            </form>

            <article>
                <section class="shad">
                    <h2>
                        <i onclick="hideFilter()" class="fal fa-times float"></i>
                        <i onclick="hideFilter()" class="fal fa-filter float"></i>
                        <i class="fal fa-filter"></i>
                        فلتر
                        </h3>

                        <div>
                            <h3 onclick="closetgl(this)"> <i class="fal fa-chevron-up"></i> المعروض
                    </h2>
                    <span onclick="activeTgl(this)" data-type=".Qcontainer" class="active">قصص</span>
                    <span onclick="activeTgl(this)" data-type=".Mcontainer" class="active">متسلسلات</span>
                    </div>

                    <div>
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

                <div class="shad">
                    <article class="qesa">
                        <div>
                            <img src="images/images3.jpg" alt="عنوان القصه">
                            <i class="fa fa-star">
                                <p>التقييم</p>
                            </i>
                            <span>5</span>
                            <div>
                                <a><i class="fal fa-heart"></i></a>
                                <a href="#"><i class="fal fa-download"></i></a>
                                <a href="#"><i class="fal fa-eye"></i></a>
                                <a><i class="fal fa-exclamation"></i></a>
                            </div>
                        </div>
                        <h3><a href="s.html">عنوان القصه</a></h3>
                    </article>

                </div>
            </article>
        </section>

        <section class="fav floated hidden">
            <div onclick="hide(this.parentElement)" class="overlay"></div>
            <article>
                <i class="fal fa-times" onclick="hide(this.parentElement.parentElement)"></i>
                <h3> <i class="fal fa-heart"></i> المفضله </h3>

                <section class="QMcontainer">
                    <section class="Qcontainer">
                        <h2>القصص</h2>
                        <article class="qesa">
                            <div>
                                <img src="images/images3.jpg" alt="عنوان القصه">
                                <i class="fa fa-star">
                                    <p>التقييم</p>
                                </i>
                                <span>5</span>
                                <div>
                                    <a><i class="fal fa-heart-broken"></i></a>
                                    <a href="#"><i class="fal fa-download"></i></a>
                                    <a href="#"><i class="fal fa-eye"></i></a>
                                    <a><i class="fal fa-exclamation"></i></a>
                                </div>
                            </div>
                            <h3><a href="s.html">عنوان القصه</a></h3>
                        </article>
                    </section>

                    <section class="Mcontainer">
                        <h2>المتسلسلات</h2>
                        <article class="qesa">
                            <div>
                                <img src="images/g1.jpg" alt="عنوان القصه">
                                <i class="fa fa-star">
                                    <p>التقييم</p>
                                </i>
                                <span>5</span>

                                <article>
                                    الجزء: <span>9</span>
                                </article>
                                <div>
                                    <a><i class="fal fa-heart-broken"></i></a>
                                    <a href="#"><i class="fal fa-download"></i></a>
                                    <a href="#"><i class="fal fa-eye"></i></a>
                                    <a><i class="fal fa-exclamation"></i></a>
                                </div>
                            </div>
                            <h3><a href="s.html">عنوان القصه</a></h3>
                        </article>
                    </section>
                </section>
            </article>
        </section>


        <p class="esc hidden">اضغط علي مفتاح <span>Esc</span> للحروج</div>
        <div class="null"></div>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>
