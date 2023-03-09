@include('blog.admin.header')
<div class="work">
  <div class="form admin_table">
    @if (isset($posts))
                    <table class="table">
                        <tr class="ok">
                            <th>Patient Name</th>
                            <th>email</th>
                            <th>App Date</th>
                            <th>Needed Doc</th>
                            <th>Status</th>
                            <th>approve</th>
                        </tr>
                        <tr>
                            @foreach ($posts as $post)
                            <td>{{ $post->patient_name }}</td>
                            <td>{{ $post->email }}</td>
                            <td>{{ $post->app_date }}</td>
                            <td>{{ $post->doctor_name }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->status }}</td>
                            @endforeach
                        </tr>
                    </table>
                    @endif
  </div>
</div>

@include('blog.admin.footer')