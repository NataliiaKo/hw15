<div class="classynav">
    <ul>
        <li><a href="{{route('blog.index')}}">Home</a></li>
        <li><a href="#">Catagories</a>
            <ul class="dropdown">
                @foreach($categories as $category)
                <li><a href="/{{$category['slug']}}">- {{$category['title']}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{route('blog.about')}}">About</a></li>
        <li><a href="{{route('blog.contact')}}">Contact</a></li>
    </ul>
</div>

