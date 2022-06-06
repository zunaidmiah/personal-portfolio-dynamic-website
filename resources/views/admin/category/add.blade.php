@extends('admin.layout.main_layout')

@section('body')


    <div class="container-fluid mt-4 pt-4" style="padding-bottom: 22%;">
        <h4>Add Category</h4><hr><br>
        @if(session('success')!= null)
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {{ session('success') }}</em></div>
        @endif
        <form action="{{  route('add-category-db')  }}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Abc, xyz ...">
            </div>
            <div class="form-group">
              <label for="type">Category Type</label>
              <select class="form-control" name="type" id="type">
                <option value="">Select One</option>
                <option value="blog">Blog</option>
                <option value="portfolio">Portfolio</option>
              </select>
            </div>
            <div class="form-group">
              <label for="parent">Parent Category</label>
              <select class="form-control" name="parent" id="parent">
                <?php
                    $cat = DB::table('categories')->get();
                    if(isset($cat) and count($cat) > 0){ ?>
                        <option value="0">Select one</option>
                        <?php foreach ($cat as $c) { ?>
                        <option value="{{  $c->id  }}">{{  $c->name  }}</option>
                    <?php } } else{ ?>
                        <option value="0">No categories</option>
                    <?php } ?>
              </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="add_category">Add Category</button>
          </form>

    </div>


@endsection