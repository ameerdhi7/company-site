<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="200">
    <div class="container">
        <div class="navbar-translate">
            <div class="row justify-content-between align-items-center">
                <div class="col-3">
                    <a href="/">                    <img class="w-100" style="max-height: 50px;object-fit: fill"  src="/assets/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a>
UNIVERSAL                         </a>
                    </div>
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation"
                                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <ul class="navbar-nav {{app()->getLocale()=="ar"?"ar-nav":""}}">
                    <li class="nav-item ">
                        <a class="nav-link  mt-1" href="/">
                            {{trans("content.home")}}

                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link  mt-1" href="/news">
                            {{trans("content.news")}}
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link   mt-1" href="/projects">
                            {{trans("content.projects")}}                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mt-1" href="/album">
                            {{trans("content.album")}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mt-1" href="/contact">
                            {{trans("content.contact")}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mt-1" href="/about">
                            {{trans("content.about")}}
                        </a>
                    <li class="nav-item">
                        <div class="btn-group" role="group" aria-label="Basic example">

                        <a class="nav-link mt-2 btn btn btn-sm" href="/lang/en">
                            ENGLISH
                        </a>
                        <a class="nav-link mt-2 btn btn btn-sm" href="/lang/ar">
                            عربي
                        </a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
