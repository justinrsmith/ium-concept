<? // Template Name: Educational Resources ?>

<? get_header() ?>
<div class="row mt-2 mb-4">
    <div class="col">
        <nav class="ium-breadcrumbs" aria-label="breadcrumb">
            <ol class="breadcrumb px-0">
                <li class="breadcrumb-item"><a href="<? echo get_home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Educational Resources</li>
            </ol>
        </nav>
        <div class="card w-100 h-100 rounded-0">
            <div class="card-header">
                <ul id="education-nav-tabs" class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="materials-tab" data-toggle="tab" href="#materials" role="tab" aria-controls="materials" aria-selected="false">Materials <i class="fas fa-book"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Videos <i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="webcasts-tab" data-toggle="tab" href="#webcasts" role="tab" aria-controls="webcasts" aria-selected="false">Webcasts <i class="fas fa-video"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="helpful-links-tab" data-toggle="tab" href="#helpful-links" role="tab" aria-controls="helpful-links" aria-selected="true">Helpful Links <i class="fas fa-link"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="true">FAQ <i class="far fa-question-circle"></i></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="education-tab-content">
                    <div class="tab-pane fade show active" id="materials" role="tabpanel" aria-labelledby="materials-tab">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-2">
                                        <div class="materials-container p-3 rounded">
                                            <h5>Important Documents</h5>
                                            <hr class="mt-0">
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> An important document
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Guidelines for a certian action
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Another informational document
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Regulation Handbook
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Some sort of document
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> By laws for the illinois urban manual
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2">
                                        <div class="materials-container p-3 rounded">
                                            <h5>Presentations</h5>
                                            <hr class="mt-0">
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Presentation on something - 03/15/15
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> New regulations slides
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Another presentation
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="#">
                                                        <i class="far fa-2x fa-file-pdf" aria-hidden="true"></i> Another Presentation on something
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 text-center mt-2">
                                        <h5 class="text-left">Video Title Here</h5>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p2TGHU4TJK8" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 text-center mt-2">
                                        <h5 class="text-left">Video Title Here</h5>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p2TGHU4TJK8" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 text-center mt-2">
                                        <h5 class="text-left">Video Title Here</h5>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p2TGHU4TJK8" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="webcasts" role="tabpanel" aria-labelledby="webcasts-tab">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 text-center mt-2">
                                        <h5 class="text-left">Webcast Title Here</h5>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p2TGHU4TJK8" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 text-center mt-2">
                                        <h5 class="text-left">Webcast Title Here</h5>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p2TGHU4TJK8" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="helpful-links" role="tabpanel" aria-labelledby="helpful-links-tab">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="materials-container p-3 rounded">
                                            <h5>Helpful Links</h5>
                                            <hr class="mt-0">
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="http://www.cpesc.org/">
                                                        <i class="fas fa-link" aria-hidden="true"></i> How do I come a CPESC?
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <a href="http://www.aiswcd.org/">
                                                        <i class="fas fa-link" aria-hidden="true"></i> Association of Illinois Soil and Water Conservation Districts
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 col-md-9">
                                        <div class="materials-container p-3 rounded">
                                            <h5>Frequently Asked Questions</h5>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis?
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor, risus vel accumsan tincidunt, eros metus porttitor sapien, eu sollicitudin nulla lacus id neque. Nunc facilisis vitae lacus id lobortis. Duis lacinia rutrum leo sit amet cursus. Nullam ut arcu ac quam molestie consectetur.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis?
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor, risus vel accumsan tincidunt, eros metus porttitor sapien, eu sollicitudin nulla lacus id neque. Nunc facilisis vitae lacus id lobortis. Duis lacinia rutrum leo sit amet cursus. Nullam ut arcu ac quam molestie consectetur.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis?
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor, risus vel accumsan tincidunt, eros metus porttitor sapien, eu sollicitudin nulla lacus id neque. Nunc facilisis vitae lacus id lobortis. Duis lacinia rutrum leo sit amet cursus. Nullam ut arcu ac quam molestie consectetur.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis?
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor, risus vel accumsan tincidunt, eros metus porttitor sapien, eu sollicitudin nulla lacus id neque. Nunc facilisis vitae lacus id lobortis. Duis lacinia rutrum leo sit amet cursus. Nullam ut arcu ac quam molestie consectetur.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<? get_footer() ?>
