@include('blog.admin.header')
<div class="work">
  <div class="form admin_table">
    @if (isset($posts))
                    <table class="table">
                        <tr class="ok">
                            <th>Patient Name</th>
                            <th>email</th>
                            <th>App Date</th>
                            <th>Doc-email</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($posts as $post)
                        @if ($post->status != "Cancelled")
                        <tr>
                            <td>{{ $post->patient_name }}</td>
                            <td>{{ $post->email }}</td>
                            <td>{{ $post->app_date }}</td>
                            <td>{{ $post->doctor_name }}</td>
                            {{-- <td>{{ $post->status }}</td> --}}
                            <td>
                              <form action="{{ route('blog.update', $post->id) }}" method="post">
                                @method('PATCH')
                                @csrf
                                @if ($post->status == "Approved")
                                  <span>Approved</span>
                                @else
                                <input type="submit" value="Approve">
                                @endif
                              </form>
                            </td>
                            <td>
                              <form action="{{ route('blog.update.cancel', $post->id) }}" method="post">
                                @method('PATCH')
                                @csrf
                                <input type="submit" value="Cancel">
                              </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    @endif
  </div>
</div>

@include('blog.admin.footer')