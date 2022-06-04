<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="DataTable paging responsive">
    <meta name="description" content="DataTable paging responsive">
    <meta name="keywords" content="DataTable, paging, responsive, DataTable paging responsive">
    <meta property="og:type" content="DataTable paging responsive">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:title" content="DataTable paging responsive">
    <meta property="og:description" content="DataTable paging responsive">
    <meta property="twitter:card" content="DataTable paging responsive">
    <meta property="twitter:url" content="{{url()->current()}}">
    <meta property="twitter:title" content="DataTable paging responsive">
    <meta property="twitter:description" content="DataTable paging responsive">
    <title>DataTable paging responsive</title>

    <link href="{{ asset('css/app.bootstrap5.min.css') }}" rel="stylesheet">
</head>

<body>
    <main class="container">
        <h1>DataTables Paging Responsive</h1>
        <article class="card mt-3">
            <div class="card-body">
                <h2 class="card-title">Example 1: Table with empty data</h2>
                <table class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable-example1" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </article>
        <article class="card mt-3">
            <div class="card-body">
                <h2 class="card-title">Example 2: Table with data i18n, language en-GB</h2>
                <table class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable-example2" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </article>
        <article class="card mt-3">
            <div class="card-body">
                <h2 class="card-title">Example 3: Table with data i18n, language vi</h2>
                <table class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable-example3" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </article>
    </main>

    <!-- App js -->
    <script src="{{ asset('js/app.bootstrap5.min.js') }}"></script>
    <!-- Dashboard js -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
