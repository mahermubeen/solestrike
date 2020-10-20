@extends('layouts.main', ['pageSlug' => 'dashboard'])

@section('content')
    
@endsection

@push('js')
    <script src="../js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
