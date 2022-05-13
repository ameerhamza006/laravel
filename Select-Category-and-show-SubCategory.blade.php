
// in controller
public function show($id)
    {
        
        $category = SubCategory::where('category_id',$id)->orderBy('id','desc')->get();

        return response()->json(['subcategory' => $category]);
    }
    
    
    //in View Page


                                <div class="form-group row">
                                 <div class="col-sm-6">
                                   <label> Category Name</label>
                                    <select class="form-control select" style="width: 100%;" name="categoryname">
                                        <option id="cat-id" value="" >Select</option>
                                         @foreach(\App\Models\Category::OrderBy('id','desc')->get() as $index => $cat)
                                    <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label> Sub Category</label>
                                    <select class="form-control " id="option"  name="subcategory" required>
                                    <option id="pro-sub-cat"  value="">Select</option>
                                 </select>
                                </div>
                                
                                
                                </div>









 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script>

   $('.select').change(function(){

if($(this).val() != '')
{
 var select = $(this).val();
 var value = $(this).val();
 //alert(value);
 var _token = $('input[name="_token"]').val();
// alert(_token)
var url = "{{ route('product.show', ":id") }}";
      url = url.replace(':id', value);
 $.ajax({
  url:url,
  method:"GET",
  data:{value:value, _token:"{{csrf_token()}}"},
  success:function(result)
  {


      var re = result['subcategory'];
     // console.log(re);
    var option = '';

      $('#option').empty()

  $.each(re,function(i,result){

      option +=  '<option value='+result.id+'>'+result.name+'</option>';



  })
  console.log(option);
  $('#option').html(option)
  }

 })
}
});

</script>
