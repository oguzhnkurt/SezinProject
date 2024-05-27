@extends('layouts.master-login')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Eğitim Takvimi</h2>
    <form action="{{ route('admin.saveSchedule') }}" method="POST">
        @csrf
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Gün</th>
                        <th scope="col">Saat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar'] as $day)
                        <tr>
                            <td>{{ $day }}</td>
                            <td>
                                <div class="form-group mb-0">
                                    <input type="time" name="schedule[{{ strtolower($day) }}]" class="form-control" required>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </form>
</div>

@endsection
