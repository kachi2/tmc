@extends('layouts.app')
@section('content')
@include('partials.adminbar')



 <section id="create-course-section" class="create-course-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="create-course-sidebar">
                        <ul class="list-bar">
                            <li class="active">Return Back</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="create-course-content">

                        <!-- COURSE BANNER -->
                        <ul class="design-course-tabs" role="tablist">
                            <li class="active">
                                <a href="#design-outline" role="tab" data-toggle="tab"><i class="icon md-list"></i>Create Course</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <!-- DESIGN OUTLINE -->
                            <div class="tab-pane fade in active" id="design-outline">
                               

                                <!-- SECTIONS -->
                                <div class="dc-sections">
                                    <!-- DC SECTION INFO -->
                                    <div class="dc-section-info">
                                        <div class="title-section">
                                            <h4 class="xsm"><span contenteditable="true">Add New Course</span></h4>
                                           
                                        </div>

                                        <!-- DC SECTION BODY -->
                                        <div class="dc-section-body">

                                            <!-- DC UNIT -->
                                            <div class="dc-unit-info dc-course-item">
                                               <form action="{{route('admin.course.store')}}" method="post" enctype ="multipart/form-data">
                                                @csrf
                                                <div class="unit-body dc-item-body">
                                                    <table class="tb-course">
                                                        <tbody>
                                                            <tr class="tb-unit-title">
                                                                <td class="label-info">
                                                                    <label for="">Course Name</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="form-item">
                                                                        <input type="text"  name="name" placeholder="enter name of course" required>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                             <tr class="tb-unit-title">
                                                             <td class="label-info">
                                                                    <label for="">Select category</label>
                                                                </td>
                                                                <td class="label-info">
                                                                  <select name="category" class="form-control">
                                                                @foreach ($category as $cc )
                                                                  <option value="{{$cc->id}}">{{$cc->name}}
                                                                  </option>
                                                                @endforeach
                                                                  </select>
                                                                </td> 
                                                            </tr>

                                                              <tr class="tb-unit-title">
                                                                <td class="label-info">
                                                                    <label for="">Price</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="form-item">
                                                                        <input type="text" name="price" placeholder="enter price of course" required>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                            
                                                              <tr class="tb-unit-title">
                                                                <td class="label-info">
                                                                    <label for="">Discount Price</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="form-item">
                                                                        <input type="text" name="discount" placeholder="enter discount price" required>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="tb-unit-title">
                                                                <td class="label-info">
                                                                    <label for="">Course Duration</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="form-item">
                                                                        <input type="text" name="duration" placeholder="enter course duration" required>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="tb-desc">
                                                                <td class="label-info">
                                                                    <label for="">Course Outline</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="form-textarea-wrapper">
                                                                        <textarea name="outline" id="outline" placeholder="Enter course outline" required></textarea>
                                                                   
                                                                        <script>
                                                                            CKEDITOR.replace( 'outline' );
                                                                    </script>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="tb-desc">
                                                                <td class="label-info">
                                                                    <label for="">Course Description</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="form-textarea-wrapper">
                                                                        <textarea name="description" id="description" required></textarea>

                                                                        <script>
                                                                            CKEDITOR.replace( 'description' );
                                                                    </script>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr class="tb-upload-content">
                                                                <td class="label-info">
                                                                    <label for="">Cover Image</label>
                                                                </td>
                                                                <td class="td-form-item">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="file" name="image" classs="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                              <tr class="tb-upload-content">
                                                                <td class="label-info">
                                                                <button type="submit" class="btn btn-primary w-50"> Create Course </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                                </form>
                                            </div>
                                            <!-- END / DC UNIT -->

                                         



                                        </div>
                                        <!-- END / DC SECTION BODY -->

                                    </div>
                                    <!-- END / DC SECTION INFO -->

                                 

                                </div>
                                <!-- END / SECTIONS -->

                            </div>
                            <!-- END / DESIGN OUTLINE -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
let msg = {!!  json_encode(Session::get('msg'))!!}
if(msg){

swal("Course Created Successfully");
}

</script>

@endsection