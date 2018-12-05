@extends('default')
@section('content')
    <?php $page = 'courses'; ?>
    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">إضافة كورس جديد</h4>
        </div>
        <div class="card">

            <div class="content">
                <?php echo Form::open(array('route' => 'add_new_course'))
                ?>

                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <input type="text" name="title" required="required" class="form-control" placeholder="عنوان الكورس" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" name="hours" required="required" class="form-control" placeholder="عدد ساعات الكورس">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>محتوي الكورس</label>
                                <textarea class="form-control" required="required" name="content" id="summary-ckeditor"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label>هدف الكورس</label>
                                <textarea rows="3" class="form-control"required="required"  id="summary-ckeditor1" name="target" placeholder="هدف الكورس" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>متطلبات الكورس</label>
                                <textarea rows="3" class="form-control" required="required" id="summary-ckeditor2" name="requir" placeholder="متطلبات الكورس" ></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">إضافة الكورس</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')

   <script>
          if($('#summary-ckeditor'))
        {
                CKEDITOR.replace( 'summary-ckeditor' );
                $('select').selectpicker();
        }  if($('#summary-ckeditor1'))
        {
                CKEDITOR.replace( 'summary-ckeditor1' );
                $('select').selectpicker();
        }  if($('#summary-ckeditor2'))
        {
                CKEDITOR.replace( 'summary-ckeditor2' );
                $('select').selectpicker();
        }
       </script>
        
@endsection