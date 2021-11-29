@extends('admin.layout.admin')


@section('main')
            </aside>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">

                        <ol class="breadcrumb">
                            <li><a href="admin"><i class="fa fa-home"></i> الرئيسية</a></li>
                            <li class="active">قائمة المدونة</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">

                        <div class="row">
                            <div class="col-xs-12">
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                                @if (session()->has('update'))
                                <div class="alert alert-success">
                                    {{ session('update') }}
                                </div>
                            @endif
                            @if (session()->has('delete'))
                                <div class="alert alert-danger">
                                    {{ session('delete') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"> <i class="fa fa-laptop"></i> قائمة المدونة </h3>
                                        <a href="{{ route('blog.create') }}" class="btn btn-primary pull-left"><i
                                                class="fa fa-plus"></i> إضافة مدونة جديد </a>

                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>



                                                <tr>
                                                    <th>رقم </th>

                                                    <th>العنوان_عربي </th>
                                                    <th>العنوان_انجليزي </th>
                                                    <th>الوصف_عربي </th>
                                                    <th>الوصف_انجليزي </th>
                                                    <th>الصورة </th>
                                                    <th>العمليات</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody-act">
                                                @php
                                                $i = 1;
                                                @endphp
                                             @foreach ($blogs as $blog)
                                                <tr>
     <td>{{$i++}}</td>
     <td>{{$blog->title_ar}}</td>
     <td>{{$blog->title_en}}</td>
     <td> {!! \Illuminate\Support\Str::limit($blog->discription_ar ,  70 , '...') !!}</td>
    <td> {!! \Illuminate\Support\Str::limit($blog->discription_en ,  70 , '...') !!}</td>
    <td> <img src="{{(url('upload/blog_image/'.$blog->image))}}" width="90%"></td>
    <td width="20%" align="center">
                  <a href="blog/{{$blog->id}}/edit" class="btn btn-primary btn-xs">تعديل</a>

                 <button  data-effect="effect-scale"
                   data-id="{{ $blog->id }}" data-toggle="modal"
                  href="#modaldemo9" title="حذف" type="button"
                 class="btn btn-danger btn-xs delete">
                 <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                 </span>
                  حذف
                </button>
             </td>
                                            </tr>

                                      @endforeach


                                    </tbody>

                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
        </section><!-- /.content -->


    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">حذف التقرير</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                               type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="blog/{blog}" method="post">
                @csrf
                @method('delete')

                <div class="modal-body">
                    <p>هل انت متاكد من عملية الحذف ؟</p><br>
                    <input type="hidden" name="id" id="id" value="">
                    {{-- <input class="form-control" name="section_name" id="section_name" type="text" readonly> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">تاكيد</button>
                </div>
        </div>
        </form>
        </div>
        </div>
    </div><!-- /.content-wrapper -->
    <script>
        $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);

        })
        </script>
@endsection


