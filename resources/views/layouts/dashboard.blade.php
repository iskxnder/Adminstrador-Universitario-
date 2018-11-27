<!doctype html>

<html class="no-js" lang="">
@include('layouts.partials.head')
<body>

<!-- Left Panel -->

   @include('layouts.partials.menu')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       @include('layouts.partials.header')
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Contenido -->
        @yield('content')
        <!-- Fin Contenido -->

        @include('layouts.partials.delete-carrer-modal')
        @include('layouts.partials.delete-student-modal')
        @include('layouts.partials.delete-teacher-modal')
        

    </div>
    

    @include('layouts.partials.script')

</body>
</html>
