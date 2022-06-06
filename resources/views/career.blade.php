@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <!-- ==================== BANNER SECTION ==================== -->
    <section class="container">
        <div class="container-banner">
            <img src="{{asset('assets/')}}/img/hiring.jpeg" alt="" class="w-100">
        </div>
    </section>
    <!-- ==================== BANNER SECTION END ==================== -->

    <!-- ==================== APPLY SECTION ==================== -->
    <section class="container">
        <div class="apply-section">
            <div class="apply-inner">
                <h2>Interested to join the GVI team?</h2>
                <p>Global Village International is always on the lookout for talented and dynamic individuals to join our team. Please visit our career page to apply.</p>
                <a href="https://forms.gle/Kvq3MvbkVGjYFtnz5" target="_blank">APPLY HERE</a>
            </div>
        </div>
    </section>
    <!-- ==================== APPLY SECTION END ==================== -->
@stop
@section('js')
@stop
