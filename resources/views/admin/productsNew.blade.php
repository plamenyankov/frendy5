@extends('admin.home')
@section('content')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern margin-top-20" id="ember-app">
    <h1>Нов продукт</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li><%$error%></li>
        @endforeach
    </ul>
    @endif
<?=Form::open(['url'=>'/admin/products/new', 'files'=> true]) ?>
    <?=Form::label('brand','Brand:')?>
    <?=Form::text('brand',null)?>
    <?=Form::label('model','Model:')?>
    <?=Form::text('model', null)?>
    <?=Form::select('categories', array('1' => 'shows'))?>
    <?=Form::file('image',['class'=>'imgUpload'])?>
    <img id="previewHolder" alt="Uploaded Image Preview Holder" width="250px" height="250px"/>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewHolder').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".imgUpload").change(function() {
            readURL(this);
        });
    </script>
    <?=Form::submit('Въведи продукт',['class'=>'button'])?>

<?=Form::close()?>

</div>



@stop