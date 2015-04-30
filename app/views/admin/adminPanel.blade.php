@extends ('layouts.adminLayout')

@section('content')

    <h1 class="page-title">Admin Panel</h1>

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="mainbar col-md-12">

                    <div class="admin-option">
                        <a class="option-link" href="shows/create">
                            <h2>Add Show</h2>

                            <p> Add some shows!</p>
                        </a>

                    </div>

                    <div class="admin-option">
                        <a class="option-link" href="admin/images/add">
                            <h2>Add Images</h2>

                            <p> Upload images for Pulse. Can be general images or related to shows.</p>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <div class="admin-option">
                        <a class="option-link" href="songs/create">
                            <h2>Add Songs</h2>

                            <p>Upload songs by Pulse.</p>
                        </a>

                    </div>

                    <div class="admin-option">

                        <a class="option-link">
                            <h2>Do other stuff</h2>

                            <p>Other stuff is cool too.</p>
                        </a>

                    </div>

                    <div class="clear"></div>
                </div>


            </div>
        </div>
    </div>

@stop