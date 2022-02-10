

// in controller

public function index(){

 $data = Form::all();

$collection = collect($data);
								    
$unique = $collection->unique('title');  // which colums unique you want add here

return view('admin.pages.forms.form',['data',$unique->values()->all()]);   //send to view blade for foreach

}


// in blade view

@php
								    
 $collection = collect(\App\Models\Form::all());
								    
 $unique = $collection->unique('title');
	 
 @endphp

@foreach($unique->values()->all() as $index => $form)
					
					<li class="nav-item" style=" margin-left: 20px;">
                    <a href="/all/{{$form->title}}/forms" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{$form->title}}

                      </p>
                    </a>
                  </li>
@endforeach
