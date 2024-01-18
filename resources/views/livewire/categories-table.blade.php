<div>
        <div id="search-bar">
            <form class="d-flex justify-content-end" role="search">
                <div class="col-auto">
                    <input wire:model.live="search" type="search" name="search" id="search" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
        <table id="example" class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent Category</th>
                <th>URL</th>
                <th>Created on</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        @if($category->parentCategory)
                            {{ $category->parentCategory->category_name }}
                        @endif
                    </td>
                    <td>{{ $category->url }}</td>
                    <td>{{ date("F j, Y, g:i a",strtotime($category->created_at)) }}</td>
                    <td>
                        @if($category->status==1)
                            <div class="form-check form-switch" style="display: inline-table">
                                <input class="form-check-input" type="checkbox" onclick="updateCategoryStatus({{ $category->id }})" id="category-{{ $category->id }}"  checked="">
                            </div>
                        @else
                            <div class="form-check form-switch" style="display: inline-table">
                                <input class="form-check-input" type="checkbox" onclick="updateCategoryStatus({{ $category->id }})" id="category-{{ $category->id }}" >
                            </div>
                        @endif&nbsp;
                        <a href="{{ url('admin/delete_category/'.$category->id) }}" id="deletePost">
                            <i class="fas fa-regular fa-trash-can" style="color: #3f6ed3"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $categories->links() }}
        </div>
</div>
