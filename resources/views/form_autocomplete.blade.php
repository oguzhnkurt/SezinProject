@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Sezin Akademi @endslot
@slot('subtitle') Eğitim Takvimi @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Autocomplete -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Eğitim Tarihleri</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">Sezin Akademi Öğrenmeyi zaman ve mekanla sınırlı tutmayan, eğitimin her zaman,
                her yerde, devamlı olmasının önemini biliyor, İnovasyon ve Gelişim Akademisi çatısı altında tüm personellerimizin gelişimine hem örgün hem uzaktan eğitimlerimizle değer katıyoruz. <br> <br>
                <code>ÖNEMLİ UYARI : Eğitim linki dersten 5 dakika önce "Link" kısmında gözükecektir.</code>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Pazartesi</div>
                        <p class="mb-3"><code>Pazartesi 17:30 - 18:45</code></p>
                        
                    </div>

                    <div class="mb-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">Salı</div>
                        <p class="mb-3"><code>Salı 16:45 - 17:30</code></p>
                        
                    </div>
</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/forms/inputs/autocomplete.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/form_autocomplete.js')}}"></script>
@endsection
