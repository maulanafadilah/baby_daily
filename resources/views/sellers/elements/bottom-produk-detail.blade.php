<div class="section full mt-2">
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <div class="col pe-1">
            <a href="{{ route('sellerproducts.edit',$products->id) }}" class="btn btn-success" style="width: 100%;">Edit</a>
        </div>
        <div class="col">
            <form action="{{ route('sellerproducts.destroy',$products->id) }}" method="post">
                @csrf
                @method('DELETE')
                <Button type="submit" class="btn btn-outline-danger" style="width: 100%;">Delete</Button>
            </form>
        </div>
    </div>
    <!-- * App Bottom Menu -->
</div>