@extends('backend.layout.master')

@section('title', '| post')
@section('content')

    <div class="pt-5">
        <div class="container pt-5">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Product List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover m-b-0 c_list">
                                <thead>
                                <tr>
                                    <th>
                                       S/n
                                    </th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>stock</th>
                                    <th>Summary</th>
                                    <th>Description</th>
                                    <th>photo</th>
                                    <th>price</th>
                                    <th>offer_price</th>
                                    <th>discount</th>
                                    <th>cat_id</th>
                                    <th>brand_id</th>
                                    <th>child_cat_id</th>
                                    <th>size</th>
                                    <th>conditions</th>
                                    <th>vendor_id</th>
                                    <th>status</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                       {{$product->id}}
                                    </td>
                                    <td>
                                        {{$product->title}}
                                    </td>
                                    <td>
                                        <p>{{Substr(strip_tags($product->slug), 0, 10)}} {{strlen(strip_tags($product->slug)) > 10 ? "......" : ""}}</p>


                                    </td>
                                    <td>
                                        <p>{{Substr(strip_tags($product->summary), 0, 10)}} {{strlen(strip_tags($product->summary)) > 10 ? "......" : ""}}</p>

                                    </td>
                                    <td>
                                        <p>{{Substr(strip_tags($product->description), 0, 10)}} {{strlen(strip_tags($product->description)) > 10 ? "......" : ""}}</p>


                                    </td>
                                    <td>{{$product->stock}}</td>
                                    <td>
                                        <img  src ="/upload/images/{{$product->photo}}" height= "70px;" width = "80px;">


                                    </td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->offer_price}}</td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->cat_id}}</td>
                                    <td>{{$product->brand_id}}</td>
                                    <td>{{$product->child_cat_id}}</td>
                                    <td>{{$product->vendor_id}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>{{$product->conditions}}</td>
                                    <td>{{$product->status}}</td>


                                    <td>
                                        <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add Product</h6>
                </div>
                <form id="basic-form" class="form-control" method="post" action="{{route('banner.store')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="title" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                    @error('title')
                                    <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="slug"  placeholder="slug" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                    @error('slug')
                                    <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="stock" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                    @error('title')
                                    <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="slug"  placeholder="price" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                    @error('slug')
                                    <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="offer-price" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                    @error('title')
                                    <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="discount"  placeholder="discount" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                    @error('slug')
                                    <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select status----------</option>
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="title" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                    @error('title')
                                    <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="size"  placeholder="size" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                    @error('slug')
                                    <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select condition----------</option>
                                        <option value="active">new</option>
                                        <option value="inactive">winter</option>
                                        <option value="inactive">popular</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>description</label>
                                    <textarea name="description" class="form-control col-12" rows="5" cols="30" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select condition----------</option>
                                        <option value="active">new</option>
                                        <option value="inactive">winter</option>
                                        <option value="inactive">popular</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select condition----------</option>
                                        <option value="active">new</option>
                                        <option value="inactive">winter</option>
                                        <option value="inactive">popular</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select condition----------</option>
                                        <option value="active">new</option>
                                        <option value="inactive">winter</option>
                                        <option value="inactive">popular</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select condition----------</option>
                                        <option value="active">new</option>
                                        <option value="inactive">winter</option>
                                        <option value="inactive">popular</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="cheese">----------select condition----------</option>
                                        <option value="active">new</option>
                                        <option value="inactive">winter</option>
                                        <option value="inactive">popular</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Summary</label>
                                    <textarea name="summary" class="form-control col-12" rows="5" cols="30" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="file" name="photo" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                </div>
                                <hr>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
