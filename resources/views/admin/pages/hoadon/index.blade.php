@extends('admin.layout.layout')

@section('title')
    Danh sách hoá đơn
@endsection

@section('header')
    <x-admin-header />
@endsection

@section('content')
    <div class="content-wrapper">

        <x-breadcrumb />

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách</h3>
                            </div>

                            <div class="card-body">

                                <table id="danhsach" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã hoá đơn</th>
                                            <th>Tổng tiền</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày tạo</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#danhsach').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('hoadon.danhsach') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'tong_tien',
                        name: 'tong_tien'
                    },
                    {
                        data: 'thanh_toan',
                        name: 'thanh_toan'
                    },
                    {
                        data: 'trang_thai',
                        name: 'trang_thai'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'mahoadon',
                        name: 'mahoadon',
                        targets: 6,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return `<button class="btn btn-primary" id="btn-duyet"
                                                        data-id="${data}" value="">Duyệt</button>
                                                    <button class="btn btn-danger" id="btn-huy"
                                                        data-id="${data}">Huỷ</button>`;
                        }
                    }
                ],
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 10
            });
        });
    </script>
@endsection

@section('footer')
    <x-admin-footer />
@endsection
