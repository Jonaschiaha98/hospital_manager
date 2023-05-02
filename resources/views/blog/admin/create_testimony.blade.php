@include('blog.admin.header')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4 text-center"><span class="text-muted fw-light"></span>Create Testimony</h4>
    @if ($errors->any())
    <div class="errors">
      <div>
          <h3 class="text-red-700">Warning ...</h3>
      </div>
      <div>
          <ul>
          @foreach ($errors->all() as $error)
              <li class="text-red-800">{{ $error }}</li>
          @endforeach
      </ul>
      </div>
    </div>
    @endif
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          
          <div class="card-body">
            <form action="{{ route('store.testimony') }}" method="post">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Ptient's Name</label>
                <div class="col-sm-10">
                  <input type="text" 
                  name="name" 
                  maxlength="45" 
                  required 
                  class="form-control" 
                  id="basic-default-name" 
                  placeholder="Name" 
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Testimony</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    name="testimony"
                    maxlength="75"
                    required
                    class="form-control"
                    id="basic-default-company"
                    placeholder="Testimony"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">Patient's Image</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <input
                      type="file"
                      name="image_path"
                      required
                      id="basic-default-email"
                      class="form-control"
                      placeholder="Doctor's image"
                      aria-label="john.doe"
                      aria-describedby="basic-default-email2"
                    />
                  </div>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Create Testimony</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      @include('blog.admin.footer')



@include('blog.admin.header')
<div class="work flex flex-row">
  @if ($errors->any())
  <div class="errors">
  <div>
      <h3 class="text-red-700">Warning ...</h3>
  </div>
  <div>
      <ul>
      @foreach ($errors->all() as $error)
          <li class="text-red-800">{{ $error }}</li>
      @endforeach
  </ul>
  </div>
  </div>
@endif
  <div class="form">
    <form action="{{ route('store.testimony') }}" method="post">
      @csrf
      <div class="input">
        <input type="text" name="name" id="" maxlength="75" placeholder="Name" class="w-full bg-slate-300">
      </div>
      <div class="input">
        <input type="text" name="testimony" id="" maxlength="250" placeholder="Testimony">
      </div>
      <div class="input">
        <input type="file" name="image_path" id="" placeholder="Patient's image">
      </div>
      <div class="input">
        <input type="submit">
      </div>
    </form>
  </div>
</div>

@include('blog.admin.footer')
