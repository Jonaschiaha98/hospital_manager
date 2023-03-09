@include('blog.admin.header')
<div class="work">
  <div class="form">
    <form action="{{ route('team.store') }}" method="post">
      @csrf
      <div class="input">
        <input type="text" name="name" id="" placeholder="Doctor's Name">
      </div>
      <div class="input">
        <input type="text" name="carrier" id="" placeholder="Doctor's Specialization">
      </div>
      <div class="input">
        <input type="email" name="email" id="" placeholder="Doctor's Email">
      </div>
      <div class="input">
        <input type="number" name="phone" id="" placeholder="Doctor's Phone No">
      </div>
      <div class="input">
        <input type="file" name="image_path" id="" placeholder="Doctor's image">
      </div>
      <div class="input">
        <input type="submit">
      </div>
    </form>
  </div>
</div>

@include('blog.admin.footer')