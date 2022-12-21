<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Delete Record using Ajax in Laravel 8 - codeanddeploy.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="plugins/Jquery-Table-Check-All/dist/TableCheckAll.js"></script>
        
        <script type="text/javascript">
          $(document).ready(function() {

            $("#posts-table").TableCheckAll();

            $('#multi-delete').on('click', function() {
              var button = $(this);
              var selected = [];
              $('#posts-table .check:checked').each(function() {
                selected.push($(this).val());
              });

              Swal.fire({
                icon: 'warning',
                  title: 'Are you sure you want to delete selected record(s)?',
                  showDenyButton: false,
                  showCancelButton: true,
                  confirmButtonText: 'Yes'
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: button.data('route'),
                    data: {
                      'selected': selected
                    },
                    success: function (response, textStatus, xhr) {
                      Swal.fire({
                        icon: 'success',
                          title: response,
                          showDenyButton: false,
                          showCancelButton: false,
                          confirmButtonText: 'Yes'
                      }).then((result) => {
                        window.location='/posts'
                      });
                    }
                  });
                }
              });
            });

            $('.delete-form').on('submit', function(e) {
              e.preventDefault();
              var button = $(this);

              Swal.fire({
                icon: 'warning',
                  title: 'Are you sure you want to delete this record?',
                  showDenyButton: false,
                  showCancelButton: true,
                  confirmButtonText: 'Yes'
              }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: button.data('route'),
                    data: {
                      '_method': 'delete'
                    },
                    success: function (response, textStatus, xhr) {
                      Swal.fire({
                        icon: 'success',
                          title: response,
                          showDenyButton: false,
                          showCancelButton: false,
                          confirmButtonText: 'Yes'
                      }).then((result) => {
                        window.location='/posts'
                      });
                    }
                  });
                }
              });
              
            })
          });
        </script>
    </head>

    <body>
        <div class="container mt-5">
            @if(Session::get('success', false))
              <?php $data = Session::get('success'); ?>
              @if (is_array($data))
                  @foreach ($data as $msg)
                      <div class="alert alert-success" role="alert">
                          <i class="fa fa-check"></i>
                          {{ $msg }}
                      </div>
                  @endforeach
              @else
                  <div class="alert alert-success" role="alert">
                      <i class="fa fa-check"></i>
                      {{ $data }}
                  </div>
              @endif
            @endif

            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('posts.multi-delete') }}">Delete All Selected</button>

            <table class="table table-striped" id="posts-table">
              <thead>
                <tr>
                  <th scope="col"><input type="checkbox" class="check-all"></th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Body</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                  <tr>
                    <td><input type="checkbox" class="check" value="{{ $post->id }}"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->body}}</td>
                    <td>
                        <form method="post" class="delete-form" data-route="{{route('posts.destroy',$post->id)}}">
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </body>
</html>