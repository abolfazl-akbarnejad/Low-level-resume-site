@if (session('error'))
            {{-- {{ dd(session('error')) }} --}}

    @section('alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/assets/alerts/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('admin/assets/alerts/sweetalert2.min.js') }}"></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Failed!!',
                text: '{{ session('error') }}',
            })
        </script>
    @endsection
    @endif
