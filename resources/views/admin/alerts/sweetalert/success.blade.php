@if (session('success'))
@section('alert')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('admin/assets/alerts/sweetalert2.all.js') }}"></script>
<script src="{{ asset('admin/assets/alerts/sweetalert2.min.js') }}"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'successfully',
            text: '{{ session('success') }}',
        })
    </script>
@endsection
@endif
