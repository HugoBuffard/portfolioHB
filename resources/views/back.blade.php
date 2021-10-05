@extends('templateBack')

@section('titre')
    Dashboard
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-passport"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Projets</span>
                        <span class="info-box-number">{{ $projets }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-envelope-square"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Messages</span>
                        <span class="info-box-number">10</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

                @if ($projetsAffiches == $projets)
                    <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon"><i class="fas fa-times"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Projets affichés</span>
                            <span class="info-box-number">{{$projetsAffiches}}</span>
                        </div>
                    @else
                        <div class="info-box mb-3 bg-danger">
                            <span class="info-box-icon"><i class="fas fa-times"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Projets affichés</span>
                                <span class="info-box-number">{{$projetsAffiches}}</span>
                            </div>
                @endif

                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fas fa-check"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages traités</span>
                    <span class="info-box-number">10</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!--/. container-fluid -->
</section>
@endsection