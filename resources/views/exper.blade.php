@extends('layouts.clearn_admin')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Exper
                    <a href="{{ route('exper.create') }}"><button type="button" class="btn btn-success">Add</button></a>
                </h5>
                @if (Session::get('status_db') && Session::get('status_db') == 'success')
                    <div class="mb-3 px-3">
                        <div class="alert alert-success" role="alert">success</div>
                    </div>
                @endif
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Date</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $value->title }} </strong>
                                    </td>
                                    <td>
                                        {{ $value->detail }}
                                    </td>
                                    <td>
                                        {{ $value->date }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('exper.edit', ['id' => $value->id]) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <form method="POST" action="{{ route('exper.destroy', $value->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="javascript:void(0)" class="dropdown-item show_confirm">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </a>
                                                </form>
                                                <script type="text/javascript">
                                                    $('.show_confirm').click(function(event) {
                                                        var form = $(this).closest("form");
                                                        event.preventDefault();
                                                        swal({
                                                                title: `Are you sure you want to delete this record?`,
                                                                text: "If you delete this, it will be gone forever.",
                                                                icon: "warning",
                                                                buttons: true,
                                                                dangerMode: true,
                                                            })
                                                            .then((willDelete) => {
                                                                if (willDelete) {
                                                                    form.submit();
                                                                }
                                                            });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
    <!-- / Content -->
@endsection
