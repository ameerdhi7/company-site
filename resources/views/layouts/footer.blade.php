<footer class="footer footer-proj">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="title">Universal</h1>
            </div>
            <div class="col-md-3 col-6">
                <ul class="nav {{app()->getLocale()=="ar"?"ar-nav":""}}"">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link">
                            {{trans("content.home")}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/album" class="nav-link">
                            {{trans("content.album")}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/news" class="nav-link">
                            {{trans("content.news")}}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <ul class="nav {{app()->getLocale()=="ar"?"ar-nav":""}}">
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">
                            {{trans("content.contact")}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">
                            {{trans("content.about")}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/projects" class="nav-link">
                            {{trans("content.projects")}}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="title">                            {{trans("content.footer1")}}
                </h3>
                <div class="btn-wrapper profile text-left">
                    <a target="_blank" href="https://twitter.com/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://dribbble.com/" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
