@extends('utama.main')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
                <div class="row">
                    <div class="card shadow mb-4 text-center">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Welcome User Di
                                Perpus 40</h6>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">
                                Buku adalah jendela dunia yang membuka pintu ke pengetahuan, petualangan, dan pertumbuhan
                                pribadi. Ketika Anda membaca, Anda berinvestasi dalam diri sendiri, memperluas cakrawala,
                                dan menjelajahi zaman yang berbeda. Website perpustakaan kami adalah sumber daya tak
                                ternilai untuk pengetahuan, menghadirkan kesempatan untuk mengubah hidup Anda. Jadilah
                                pelajar seumur hidup dengan mengakses buku-buku hebat yang kami tawarkan, karena setiap
                                halaman adalah peluang baru untuk memulai petualangan baru, memahami perspektif baru, dan
                                menjadi lebih bijak. Membaca adalah pintu menuju perubahan yang luar biasa, dan buku adalah
                                sahabat setia yang siap menemani Anda dalam perjalanan hidup Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">


    <script>
        new DataTable('#dataTable');
    </script>
@endsection
