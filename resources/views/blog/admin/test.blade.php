@include('blog.admin.header')
<div class="work">
  <div class="form">
    @isset($posts)
                    <table class="table">
                        <tr class="ok">
                            <th class="user">Name</th>
                            <th class="user">testimony</th>
                            <th class="user">image_path</th>
                        </tr>
                        <tr>
                            @foreach ($posts as $post)
                            <td class="user">{{ $post->name }}</td>
                            <td class="user">{{ $post->testimony }}</td>
                            <td class="user">{{ $post->image_path }}</td>
                            @endforeach
                        </tr>
                    </table>
                    @endisset
  </div>
</div>

@include('blog.admin.footer')