@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="customerList">

                <div class="card-header border-bottom-dashed">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">Religion List</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="card-body border-bottom-dashed border-bottom">
                    {{-- <form> --}}
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="search-box">
                                    <input type="text" class="form-control search"
                                        placeholder="Search for customer, email, phone, status or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <a  class="btn btn-dange" href="{{ route('admin.religion.create') }}"> Add </a>
                            </div>

                            <!--end col-->
                            
                        </div>

                            <!--end col-->
                            

                        <!--end row-->
                    {{-- </form> --}}
                </div>

                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card mb-1">
                            <table class="table align-middle" id="customerTable">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            S.N
                                        </th>

                                        <th class="sort" data-sort="customer_name">name</th>
                                        <th class="sort" data-sort="created_at">created at</th>
                                        <th>Status</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach($religions as $key => $item)
                                    <tr>
                                        <th scope="row">
                                            {{++$key}}
                                        </th>
                                        
                                        <td class="customer_name">{{ $item->name }}</td>
                                        <td class="date">{{ $item->created_at }}</td>
                                        <td class="status"><span
                                                class="badge badge-soft-success text-uppercase">Active</span>
                                        </td>
                                        <td>
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <a href="{{ route('admin.religion.edit',$item->id) }}" 
                                                        class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item delete_item" model="Religion" item_id="{{ $item->id}}" data-bs-toggle="tooltip"
                                                    {{-- data-bs-trigger="hover" data-bs-placement="top" \ --}}
                                                    title="Remove">
                                                    {{-- <form action="{{ route('admin.religion.destroy',$item->id) }}" method="POST">
                                                    @csrf
                                                        @method('DELETE') --}}

                                                        {{-- <a class="text-danger d-inline-block remove-item-btn"
                                                            data-bs-toggle="modal" href="{{ route('admin.religion.edit',$item->id) }}"> --}}
                                                            <i class="ri-delete-bin-5-fill fs-16 text-danger d-inline-block remove-item-btn"></i>
                                                        {{-- </a> --}}
                                                    {{-- </form> --}}

                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="d-flex justify-content-end ">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <!--end col-->
    </div>

    <!--end row-->


@endsection
