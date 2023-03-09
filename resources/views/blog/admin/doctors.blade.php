@include('blog.admin.header')
<div class="work">
  <div class="form">
    @if (isset($posts))
                    <table class="table">
                        <tr class="ok">
                            <th class="user">Doctor's Name</th>
                            <th class="user">Specialication</th>
                            <th class="user">email</th>
                            <th class="user">phone</th>
                            <th class="user">Status</th>
                        </tr>
                        <tr>
                            @foreach ($posts as $post)
                            <td class="user">{{ $post->doctor_name }}</td>
                            <td class="user">{{ $post->specialization }}</td>
                            <td class="user">{{ $post->email }}</td>
                            <td class="user">{{ $post->Phone }}</td>
                            <td class="user">{{ $post->doctor_image }}</td>
                            @endforeach
                        </tr>
                    </table>
                    @endif
  </div>
</div>

@include('blog.admin.footer')