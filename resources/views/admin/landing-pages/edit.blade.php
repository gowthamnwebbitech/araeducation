@extends('admin.index')
@section('admin')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">Edit Page Details</h3>
                        {{-- <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Pages</li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>
                        </div> --}}
                    </div>
                    
                </div>
            </div>	  
            <style type="text/css">
                [type="radio"]:not(:checked), [type="radio"]:checked {
                    position: relative;
                    left: -4px;
                    opacity: 1;
                }
                .cke_contents
                {
                    height: 200px !important;
                }
                [type="checkbox"]:not(:checked), [type="checkbox"]:checked
                {
                    position: relative;
                    left: -4px;
                    opacity: 1;
                    width: 25px;
                    height: 25px;
                    top: 10px;
                }
            </style>
            <!-- Main content -->
            <section class="content">
                <div class="row">			  
                    <div class="col-lg-12 col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="box">
                            <!-- /.box-header -->
                            <form class="form" action="{{ route('landing.update', $value->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-5">
                                    <div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Select Category</label>
											<div class="input-group mb-3">
												<select class="form-control select2 @error('select_location') is-invalid @enderror" name="category_id" id="select_location">
												    <option value="">Select Category</option>
													@if($categories)
                                                        @foreach($categories as $key => $category)
                                                        <option value="{{ $category->id }}" {{ $category->id == $value->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
                                                        @endforeach
													@endif
												</select>
											</div>
											@error('select_location')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
										</div>
									</div>
                                    <!-- Select Page -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Page</label>
                                            <select class="form-control select2 @error('page_name') is-invalid @enderror" name="page_name" id="page_name" required>
                                                <option value="">Select Category</option>
                                                @foreach($pages as $page)
                                                    <option value="{{ $page }}" {{ $value->page_name == $page ? 'selected' : '' }}>
                                                        {{ $page }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name',$value->name) }}" required>
                                        </div>
                                    </div>

                                    <!-- Image -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" name="product_image">
                                            @if($value->product_image)
                                                <img src="{{ asset('public/'.$value->product_image) }}" class="mt-2" width="120">
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Slug -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">URL Slug</label>
                                            <input type="text" class="form-control" name="url_slug" value="{{ old('url_slug',$value->slug) }}" required>
                                        </div>
                                    </div>

                                    <!-- Banner Description -->
                                    <div class="col-md-6">
                                        <label class="form-label">Banner Content</label>
                                        <textarea name="banner_description" id="editor1" class="form-control" rows="10">{{ old('banner_description',$value->banner_description) }}</textarea>

                                        <label class="form-label mt-3">Banner Link</label>
                                        <input type="text" class="form-control" name="banner_link" value="{{ old('banner_link',$value->banner_link) }}">
                                    </div>

                                    <!-- Page Content -->
                                    <div class="col-md-6">
                                        <label class="form-label">Page Content</label>
                                        <textarea name="page_description" id="editor2" class="form-control" rows="10">{{ old('page_description',$value->page_description) }}</textarea>

                                        <h4 class="text-success mt-3">FAQ</h4>
                                            <div id="dynamicTable2">
                                                @php $faqs = $value->faq ? json_decode($value->faq, true) : []; @endphp
                                                @if(!empty($faqs))
                                                    @foreach($faqs as $i => $faq)
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <input type="text" 
                                                                    name="faq[{{ $i }}][title]" 
                                                                    class="form-control" 
                                                                    value="{{ $faq['title'] ?? '' }}" 
                                                                    placeholder="Title">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" 
                                                                    name="faq[{{ $i }}][description]" 
                                                                    class="form-control" 
                                                                    value="{{ $faq['description'] ?? '' }}" 
                                                                    placeholder="Description">
                                                            </div>
                                                            <div class="col-md-2">
                                                                @if($i == 0)
                                                                    <a href="javascript:void(0)" name="add2" id="add2" class="btn btn-success">+</a>
                                                                @else
                                                                    <a href="javascript:void(0)" name="add2" id="add2" class="btn btn-danger">×</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                            <input type="text" name="faq[0][title]" class="form-control" placeholder="Title">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="faq[0][description]" class="form-control" placeholder="Description">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="javascript:void(0)" class="btn btn-success addRow">+</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                    </div>

                                    <!-- Meta Fields -->
                                    <div class="col-md-6">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title',$value->meta_title) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Meta Description</label>
                                        <input type="text" class="form-control" name="meta_description" value="{{ old('meta_description',$value->meta_description) }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Meta Keyword</label>
                                        <input type="text" class="form-control" name="meta_keyword" value="{{ old('meta_keyword',$value->meta_keyword) }}">
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option value="Active" {{ $value->status == 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="In Active" {{ $value->status == 'In Active' ? 'selected' : '' }}>In Active</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3 mb-5 text-center">
										<input type="submit" name="submit" class="btn btn-primary" value="Submit">
									</div>
                                </div>

                                {{-- <div class="box-footer text-end mt-3"> --}}
                                {{-- </div> --}}
                            </form>
                        </div>
                        <!-- /.box -->			
                    </div>
                </div>
            </section>
        </div>
    </div>
  <!-- /.content-wrapper -->
  	<style>
	    .note-editor .card-header {
	        display: block;
	    }
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        document.querySelectorAll('textarea').forEach(function(el) {
            CKEDITOR.replace(el);
        });
    </script>
    <script src="<?php echo url('');?>/public/admin_assets/js/vendors.min.js"></script>
    
    <script type="text/javascript">
        var i = 2;
        var j = 2;
        var k = 2;
        $("#add").click(function(){
            ++i;
            $("#dynamicTable").append('<div class="row dynamicrow mb-3">\
                    <div class="col-md-6">\
                        <div class="row">\
                            <div class="col-md-6" id="point_en">\
                            	<div class="form-group">\
                                    <label>\
                                        <input type="checkbox" class="flat-red" id="featured" name="addmore['+i+'][background]">\
                                    </label>\
                                    <label class="form-label">Background Color</label>\
                                </div>\
                            </div>\
                            <div class="col-md-6" style="margin-bottom: 10px;">\
	                        	<div class="form-group text-start">\
		                            <label class="form-label text-start">Image</label>\
		                            <input type="file" name="addmore['+i+'][t_image]" class="form-control"  placeholder="Price">\
		                        </div>\
	                        </div>\
	                        <div class="col-md-6" style="margin-bottom: 10px;">\
	                        	<div class="form-group text-start">\
		                            <label class="form-label text-start">Button Link</label>\
		                            <input type="text" name="addmore['+i+'][button_link]" class="form-control"  placeholder="Button Link">\
		                        </div>\
	                        </div>\
	                        <div class="col-md-6">\
								<div class="form-group">\
									<label class="form-label">Select Position</label>\
									<div class="input-group mb-3">\
										<select class="form-control" name="addmore['+i+'][before_content]" id="before_content">\
											<option value="Banner Content">Banner Content</option>\
											<option value="Client Section">Client Section</option>\
											<option value="Get in Touch">Get in Touch</option>\
											<option value="Pricing Plans">Pricing Plans</option>\
											<option value="After Banner">After Banner</option>\
											<option value="After What We Do">After What We Do</option>\
											<option value="After Review">After Review</option>\
											<option value="After Portfolio">After Portfolio</option>\
										</select>\
									</div>\
								</div>\
							</div>\
	                        <div class="col-md-6" style="margin-bottom: 10px;">\
	                        	<div class="row">\
	                        		<label for="image" class="form-label text-start">Image Align</label><br>\
	                        		<div class="col-md-6 text-start">\
	                        			<input type="radio" name="addmore['+i+'][image_side]" value="left">Left\
	                        		</div>\
	                        		<div class="col-md-6 text-start">\
	                        			<input type="radio" name="addmore['+i+'][image_side]" value="right">Right\
	                        		</div>\
	                        	</div>\
                            </div>\
	                        \
                        </div>\
                    </div>\
                    <div class="col-md-5">\
						<div class="form-group">\
							<textarea name="addmore['+i+'][description]" id="editor'+i+'" class="form-control" rows="10"></textarea>\
						</div>\
					</div>\
					<div class="col-md-1"><a href="javascript::void(0)" class="remove-tr" title="Remove"><i class="btn btn-danger mdi mdi-close"></i></a></div>\
                </div>\
                <script>\
                CKEDITOR.replace("editor'+i+'")'
		    );
        });
        $(document).on('click', '.remove-tr', function(){  
            $(this).parents('.dynamicrow').remove();
        });

        $("#add1").click(function(){
            ++j;
            $("#dynamicTable1").append('<div class="row dynamicrow1 mb-3">\
                	<div class="col-md-3" style="margin-bottom: 10px;">\
                    	<div class="form-group text-start">\
                            <input type="text" name="we_do['+j+'][title]" class="form-control"  placeholder="Title">\
                        </div>\
                    </div>\
                    <div class="col-md-4" style="margin-bottom: 10px;">\
                    	<div class="form-group text-start">\
                            <!-- <label class="form-label text-start">Description</label> -->\
                            <input type="text" name="we_do['+j+'][description]" class="form-control"  placeholder="Description">\
                        </div>\
                    </div>\
                    <div class="col-md-4" style="margin-bottom: 10px;">\
                    	<div class="form-group text-start">\
                            <!-- <label class="form-label text-start">Link</label> -->\
                            <input type="text" name="we_do['+j+'][link]" class="form-control"  placeholder="Link">\
                        </div>\
                    </div>\
					<div class="col-md-1"><a href="javascript::void(0)" class="remove-tr1" title="Remove"><i class="btn btn-danger mdi mdi-close"></i></a></div>\
                </div>'
		    );
        });
        $(document).on('click', '.remove-tr1', function(){  
            $(this).parents('.dynamicrow1').remove();
        });

        $("#add2").click(function(){
            ++k;
            $("#dynamicTable2").append('<div class="row dynamicrow2 mb-3">\
                	<div class="col-md-4" style="margin-bottom: 10px;">\
                    	<div class="form-group text-start">\
                            <input type="text" name="faq['+k+'][title]" class="form-control"  placeholder="Title">\
                        </div>\
                    </div>\
                    <div class="col-md-6" style="margin-bottom: 10px;">\
                    	<div class="form-group text-start">\
                            <!-- <label class="form-label text-start">Description</label> -->\
                            <input type="text" name="faq['+k+'][description]" class="form-control"  placeholder="Description">\
                        </div>\
                    </div>\
					<div class="col-md-1"><a href="javascript::void(0)" class="remove-tr2" title="Remove"><i class="btn btn-danger mdi mdi-close"></i></a></div>\
                </div>'
		    );
        });
        $(document).on('click', '.remove-tr2', function(){  
            $(this).parents('.dynamicrow2').remove();
        });
        
        function CatogeryUrl()
		{
		    
		    var text = $("#name").val();
		    var fixed = text.toLowerCase();
		    var fixed1 = fixed.replace(/\s+/g, '-');
		    
		    $("#url_slug").val(fixed1);
		}

    </script>
    
    <script type="text/javascript">
    	//Add text editor
		$(function () {
		    "use strict";

		    // Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor2')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5();		
			
		});
    </script>
@endsection