<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

         <a href="{{route('posts.show',$post['id'])}}" class="dropdown-item">
            <i class="fas fa-eye"></i>
            {{__('Show')}}
        </a>
        
        <a href="{{route('posts.edit',$post['id'])}}" class="dropdown-item">
            <i class="fa fa-edit" aria-hidden="true"></i>
            {{__('Edit')}}
        </a>

        <form method="POST" action="{{route('posts.destroy',$post['id'])}}" class="d-inline">
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="dropdown-item delete_post text-danger">
                <i class="fa fa-trash "></i>
                {{__('Delete')}}
            </button>
        </form>
    </div>
</div>
