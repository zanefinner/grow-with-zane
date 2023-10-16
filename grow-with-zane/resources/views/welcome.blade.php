
@extends('layouts.app')
@auth
    {{-- User is logged in, so let's redirect them --}}
    <script>window.location = "{{ route('home') }}";</script>
@endauth
@section('content')
<div class="container">
    <div class="row">
        <!-- Card 1 -->
        <h2>Features</h2>
        <div class="col-md-4 mb-4">
            <div class="card custom-card shadow">

                <div class="card-body">
                    <h5 class="card-title">Grow Journal</h5>
                    <p class="card-text">Keep track of your cannabis cultivation journey with our complete CRUD integration. Record your progress and insights in a convenient table format.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card  custom-card shadow">

                <div class="card-body">
                    <h5 class="card-title">Card Title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card  custom-card shadow">

                <div class="card-body">
                    <h5 class="card-title">Card Title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

</body>


</html>
