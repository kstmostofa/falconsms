<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN #header -->
        @include('layouts.header')
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        @include('layouts.sidebar')
        <!-- END #sidebar -->

        <!-- BEGIN mobile-sidebar-backdrop -->
        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
            data-toggle-class="app-sidebar-mobile-toggled"></button>
        <!-- END mobile-sidebar-backdrop -->

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <!-- BEGIN row -->
            @yield('content')
            <!-- END row -->
        </div>
        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
        <!-- BEGIN theme-panel -->
        <div class="app-theme-panel">
            <div class="app-theme-panel-container">
                <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i
                        class="bi bi-sliders"></i></a>
                <div class="app-theme-panel-content">
                    <div class="small fw-bold text-white mb-1">Theme Color</div>
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body p-2">
                            <!-- BEGIN theme-list -->
                            <div class="app-theme-list">
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-pink" data-theme-class="theme-pink"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-red" data-theme-class="theme-red"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-warning" data-theme-class="theme-warning"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-lime" data-theme-class="theme-lime"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-green" data-theme-class="theme-green"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                                <div class="app-theme-list-item active"><a href="javascript:;"
                                        class="app-theme-list-link bg-teal" data-theme-class=""
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-info" data-theme-class="theme-info"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-primary" data-theme-class="theme-primary"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-purple" data-theme-class="theme-purple"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                            </div>
                            <!-- END theme-list -->
                        </div>
                        <!-- END card-body -->

                        <!-- BEGIN card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <!-- END card-arrow -->
                    </div>

                    <div class="small fw-bold text-white mb-1">Theme Cover</div>
                    <div class="card">
                        <!-- BEGIN card-body -->
                        <div class="card-body p-2">
                            <!-- BEGIN theme-cover -->
                            <div class="app-theme-cover">
                                <div class="app-theme-cover-item active">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url(/assets/img/cover/cover-thumb-1.jpg);"
                                        data-theme-cover-class="" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Default">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url(/assets/img/cover/cover-thumb-2.jpg);"
                                        data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 2">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url(/assets/img/cover/cover-thumb-3.jpg);"
                                        data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 3">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url(/assets/img/cover/cover-thumb-4.jpg);"
                                        data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 4">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url(/assets/img/cover/cover-thumb-5.jpg);"
                                        data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 5">&nbsp;</a>
                                </div>
                            </div>
                            <!-- END theme-cover -->
                        </div>
                        <!-- END card-body -->

                        <!-- BEGIN card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <!-- END card-arrow -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END theme-panel -->
    </div>
    <!-- END #app -->

    @include('layouts.script')
</body>

</html>
