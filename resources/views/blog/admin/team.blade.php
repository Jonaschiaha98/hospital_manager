@include('blog.admin.header')
<div class="work">
  <div class="form admin_table">
    @isset($posts)
      <table class="table">
          <tr class="ok">
            <th>Team Members</th>
            <th>Phone</th>
            <th>email</th>
            <th>carrire</th>
            <th>App Image</th>
          </tr>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->name }}</td>
              <td>{{ $post->phone }}</td>
              <td>{{ $post->email }}</td>
              <td>{{ $post->carrier }}</td>
              <td>{{ $post->image_path }}</td>
            </tr>
            @endforeach
        </table>
      @endisset
  </div>
</div>

@include('blog.admin.footer')